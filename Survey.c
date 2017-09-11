#include<stdio.h>
int main()
{
    int a,i=1;
    char l[10];
    char d[10];
    while(1)
    {
    printf("\nYou are Person%d",i);
    printf("\n***MOVIE REVIEW***\n");
    printf("Enter your rating on scale between 1-5:\n");
    scanf("%d",&a);
    if(a<1&&b>5)
    {

        printf("Scale range is batween 1 & 5\n");
        printf("Enter your review scale again\n");
        goto 19;
    }
    printf("Please enter your name:\n");
    scanf("%s",l);
    printf("Please enter your Place:\n");
    scanf("%s",d);
    printf("Person%d etails are:\n");
    printf("Name: ");
    puts(l);
    printf("Place: ");
    puts(d);
    printf("Rating: ");
    printf("You rated: %d",a);
    i++;
    }
    return 0;
}
