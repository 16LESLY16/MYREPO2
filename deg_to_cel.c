#include<stdio.h>
    float degc,degK,degF;
    float bdegc,farf;
    float fdegc,farb,farb2,kf2,kf;
int main()
{
    printf("Enter the boiling temperaure in Deg Celsius\n");
    scanf("%f",&bdegc);
    printf("Enteer the freezing point of water\n");
    scanf("%f",&fdegc);
    calc(&bdegc,&fdegc);
    return 0;
}
void calc(float *bdegc,float *fdegc)
{
    farb=((*bdegc)*(5/9))+32;
    farb2=((*fdegc)*(5/9))+32;
    kf=(*bdegc)+273;
    kf2=(*fdegc)+273;
    printf("Water boiling point in farenheint and Kelvin:%f and %f\n",farb,kf);
    printf("Water boiling point in farenheint and Kelvin:%f and %f\n",farb2,kf2);
}
