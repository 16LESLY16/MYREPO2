#include<stdlib.h>
#include<stdio.h>
#define INCHES 2.54
#define FOOT 12

void main()
{
    float cm,inch,a;
    int feets;

    printf("Enter value of centimeter: ");
    scanf("%f",&cm);
    inch = cm/INCHES;
    feets = inch/FOOT;
    a = inch-(feets*FOOT);
    printf("%d Feet and %.1f inches",feets,a);
    getch();
}
