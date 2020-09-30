import cv2 as cv
import time

video_name = 'pic_' 
file_type = '.png' 

# Load the model
#net = cv.dnn.readNet('models/face-detection-adas-0001.xml', 'models/face-detection-adas-0001.bin')
net = cv.dnn.readNet('models/face-detection-retail-0004.xml', 'models/face-detection-retail-0004.bin')


# Specify target device
net.setPreferableTarget(cv.dnn.DNN_TARGET_MYRIAD)

#Specify a camera
cap = cv.VideoCapture(0)

#Get the camera data:
def capProperties():
    print("[info] W, H, FPS")
    print(cap.get(cv.CAP_PROP_FRAME_WIDTH))
    print(cap.get(cv.CAP_PROP_FRAME_HEIGHT))
    print(cap.get(cv.CAP_PROP_FPS))

capProperties()
cap.set(3,320)
cap.set(4,240)

# 設定擷取影像的尺寸大小
#cap.set(cv.CAP_PROP_FRAME_WIDTH, 640)
#cap.set(cv.CAP_PROP_FRAME_HEIGHT, 360)

#time the frame rate....
start = time.time()
frames = 0

# 使用 XVID 編碼
fourcc = cv.VideoWriter_fourcc(*'XVID')

network_width = 160
network_height = 120
def preprocess(source_cap):
    resized_cap = cv.resize(source_cap,(network_width,network_height))
    return resized_cap

# 建立 VideoWriter 物件，輸出影片至 output.avi
# FPS 值為 20.0，解析度為 640x360
#out = cv.VideoWriter('output.avi', fourcc, 20.0, (640, 360))

picPrev = False
picNow = False
video_counter = 0
test = 0

while(cap.isOpened()):
    # Capture frame-by-frame
    ret, frame = cap.read()
    
    tmp = test
    
    #preprocess
    resized = preprocess(frame)

    # Prepare input blob and perform an inference
    blob = cv.dnn.blobFromImage(resized, size=(300, 300), ddepth=cv.CV_8U) 
    
    net.setInput(blob)
    out = net.forward()
    
    

    # Draw detected faces on the frame
    for detection in out.reshape(-1, 7):
        
        picPrev = picNow
        
        confidence = float(detection[2])
        
        xmin = int(detection[3] * resized.shape[1])
        ymin = int(detection[4] * resized.shape[0])
        xmax = int(detection[5] * resized.shape[1])
        ymax = int(detection[6] * resized.shape[0])
#        print(confidence)        
        cv.imshow('frame',frame)
        if confidence > 0.5:
            test = test + 1
#            print(test)
#            print(picNow)
            picNow =True
            cv.rectangle(frame, (xmin*2, ymin*2), (xmax*2, ymax*2), color=(0, 255, 255))
#            print(picPrev)
            if picPrev == False:
                timestr=time.strftime('%Y-%m-%d_%H-%M-%S', time.localtime(time.time()))
                save_name = timestr + file_type
                cv.imwrite(save_name, frame)
                print('writing to ' + save_name)
                video_counter = video_counter + 1
#        else:
#            picNow = False
#            if picPrev == True:
#                print(picPrev)
#                save_name = video_name + str(video_counter) + file_type
#                cv.imwrite(save_name, frame)
#                print('writing to ' + save_name)
#                video_counter = video_counter + 1
#    print(tmp)
    if tmp == test:
        picNow = False
        if picPrev == True:
            timestr=time.strftime('%Y-%m-%d_%H-%M-%S', time.localtime(time.time()))
            save_name = timestr + file_type
            cv.imwrite(save_name, frame)
            print('writing to ' + save_name)
            video_counter = video_counter + 1


            
            #font = cv.FONT_HERSHEY_PLAIN
            #cv.putText(frame,'Face: '+str(round(confidence,2)),(xmin,ymin), font, 1,(0,255,255),2,cv.LINE_AA)

            
            #font = cv.FONT_HERSHEY_PLAIN
            #cv.putText(frame,'Face: '+str(round(confidence,2)),(xmin,ymin), font, 1,(0,255,255),2,cv.LINE_AA)

    
    frames+=1
    
    if ret == True:
        # 寫入影格
        #out.write(frame)
        
        if cv.waitKey(1) & 0xFF == ord('q'):
            # 釋放所有資源
            cap.release()
            cv.destroyAllWindows()
            break
    else:
        break

