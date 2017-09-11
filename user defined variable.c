#include<stdio.h>
int main()
{
    while(1)
    {
    float dis,Tax,o,c,d,T,D;
    printf("\nEnter the original price:");
    scanf("%f",&o);
    printf("Enter the Tax in percentage:");
    scanf("%f",&T);
    printf("Enter the discount in percentage:");
    scanf("%f",&D);
    c=(D/100)*o;
    d=(T/100)*o;
    Tax=o+d;
    dis=Tax-c;
    printf("The original price:%f\n",o);
    printf("The price after Tax:%f\n",Tax);
    printf("The discount amount:%f\n",c);
    printf("Your special price is:%f\n",dis);
    }
    return 0;
}
