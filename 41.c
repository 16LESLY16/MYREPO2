#include <stdio.h>
int main()
{
    int i, e, rows, k=0;
    printf("Enter number of rows: ");
    scanf("%d",&rows);
    for(i=1; i<=rows; ++i, k=0)
    {
        for(e=1; e<=rows-i; ++e)
        {
        printf("  ");
        }
        while(k != 2*i-1)
        {
        printf("* ");
        ++k;
        }
    printf("\n");
    }
    return 0;
}
