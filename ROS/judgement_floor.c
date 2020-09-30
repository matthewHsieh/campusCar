#include <stdio.h>
#include <stdlib.h>

#define MIN 0x80000000

struct {
    int ESSID_floor[50];
    int Signal_level[50];
}total;
int compare(const void *a, const void *b){
    int c = *(int*)a;
    int d = *(int*)b;
    return c-d;

}
void merge(int arr[], int arr2[], int l, int m, int r){
    int i, j, k;
    int n1 = m - l + 1;
    int n2 = r - m;
    int L[n1], R[n2];
    int L2[n1],R2[n2];
    for(i = 0 ; i < n1 ; i++){
        L[i] = arr[l + i];
        L2[i] = arr2[l + i];
    }
    for(j = 0 ; j < n2 ; j++){
        R[j] = arr[m + 1 + j];
        R2[j] = arr2[m + 1 + j];
    }
    i = 0;
    j = 0;
    k = l;
    while(i < n2 && j < n2){
        if(L[i] >= R[j]){
            arr[k] = L[i];
            arr2[k] = L2[i];
            i++;
        }
        else {
            arr[k] = R[j];
            arr2[k] = R2[j];
            j++;
        }
        k++;
    }
    while(i < n1){
        arr[k] = L[i];
        arr2[k] = L2[i];
        i++;
        k++;
    }
    while(j<n2){
        arr[k] = R[j];
        arr2[k] = R2[j];
        j++;
        k++;
    }
}
void mergeSort(int arr[], int arr2[], int l, int r){
    if(l < r){
        int m = l + (r - l)/2;

        mergeSort(arr, arr2, l, m);
        mergeSort(arr, arr2,  m + 1, r);

        merge(arr, arr2,  l, m, r);
    }
}
int main(int argc,char *argv[])
{	
    FILE *fp1 = fopen("wlan.txt","r");
    FILE *fp2;
    int  abc, Signal_level_run=0, ESSID_floor_run=0, copyy[50], floor;
    char col[200], op[4];

    if(fp1 == NULL){
        printf("Not found!!!");
    }
    fgets(col,200,fp1);
	for(int index = 0;index < 50;index++){
		//set default
		total.Signal_level[index] = MIN;
		total.ESSID_floor[index] = 0;
	}
    while(fscanf(fp1,"          %s",op) != EOF){

        if(op[0] == 'C' && op[1] == 'e' && op[2] == 'l' && op[3] == 'l'){

            int b = 3;
            while(b--){
                fgets(col,200,fp1);
            }
            fscanf(fp1,"                    Quality=%2d/70  Signal level=%d dBm", &abc, &total.Signal_level[Signal_level_run]);
            //fscanf(fp1,"%2d/70  Signal level=%d dBm", &abc, &total.Signal_level[Signal_level_run]);
            //printf("%d %d\n",abc,total.Signal_level[Signal_level_run]);
            fgets(col,200,fp1);
            fgets(col,200,fp1);
            fscanf(fp1,"                    ESSID:\"Ton_B A3-%1d09\"", &total.ESSID_floor[ESSID_floor_run]);
			//get correct floor
            if(total.ESSID_floor[ESSID_floor_run]){
                Signal_level_run++;
                ESSID_floor_run++;
            }
        }
    }
    /*for(int a = 0 ; a < 50 ; a++){
        copyy[a]=total.Signal_level[a];
    }*/

    mergeSort(total.Signal_level, total.ESSID_floor, 0, 49);
    /*for(int a = 0 ; a < 50 ; a++){

        if(copyy[a]==total.Signal_level[0]){
            floor = a;
            break;
        }
    }*/

    fp2 = fopen("floor.txt","w");
    if(fp2 == NULL){
        printf("fp2 is empty!!!");
    }
    //printf("ton");
	int c = 0;
    //printf("%d\n",total.ESSID_floor[0]);
	while(!total.ESSID_floor[c]) c++;//When we get that ESSID isn't equal to 0, we write it in floor.txt. Beacuse defalut is 0, we can do it without mistakes. 
	if (total.ESSID_floor[c]==3  || total.ESSID_floor[c]==4)
		fprintf(fp2,"%d", total.ESSID_floor[c]);
    fclose(fp1);
    fclose(fp2);
    return 0;
}
