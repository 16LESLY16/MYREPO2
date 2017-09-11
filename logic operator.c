#include<stdio.h>
#include<stdbool.h>
int main()
{
    int a,b,c,d,e,v;
    printf("Wether milk is available?:<True=1,No=0>\n");
    scanf("%d",&v);
    printf("Should I use Honey?:<True=1,No=0\n");
    scanf("%d",&a);
    printf("Should I use sugar?:<True=1,No=0>\n");
    scanf("%d",&b);
    printf("Tea type-Bag:<True=1,No=0>\n");
    scanf("%d",&c);
    printf("Tea type-leaf<True=1,No=0>\n");
    scanf("%d",&d);
    printf("What's your mood:<True=1,No=0>\n");
    scanf("%d",&e);
    if((v==1)&&((a==1)||(b==1))&&((c==1)||(d==1))&&(e==1))
    printf("\nOk Let me do a Tea for you\n");
    else
    printf("I am not doing the tea\n");
    return 0;
}
