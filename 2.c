#include<stdio.h>
int main()
{

    int a,b;
    while(1)
    {
    printf("\n-------------------\n");
    printf("Enter two numbers:");
    scanf("%d%d",&a,&b);
    if((a/2)>=50&(b/2)>=50)
    printf("Your numbers are:%d and %d",a,b);
    else
    printf("Invalid\n");
    printf("\n-------------------\n");
    return 0;
    }

}
