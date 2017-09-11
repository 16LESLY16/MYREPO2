#include<stdio.h>
#include<string.h>
#include<stdlib.h>
int main()
{
    char r[5];
    int c;
    printf("Enter which data type\n");
    scanf("%s",r);
    c=sizof(r);
    printf("%d\n",c);
    return 0;
}
