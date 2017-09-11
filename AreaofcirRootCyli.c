#include<stdio.h>
#include<math.h>
#define PI 3.1428
int main()
{

    float rc,h,AC,dis;
    float r1,r2,a,b,c,rcy,v;
    printf("\n***Finding Radius of circle\n**");
    printf("Enter radius of circle\n");
    scanf("%f",&rc);
    AC=PI*rc*rc;
    printf("Area of circle is:%.2f\n",AC);
    printf("\n***Finding roots of Quadratic Equation\n**");
    printf("Enter the quadratic equation a,b,c co-efficients\n");
    scanf("%f%f%f",&a,&b,&c);
    dis=sqrt(b*b-4*a*c);
    r1=-(b+dis)/2*a;
    r2=-(b-dis)/2*a;
    if(dis>0)
    {

        printf("roots are real\n");
        if(r1>0)
        printf("They are %.2f+%.2f,%.2f%.2f\n",r1,r2);
        else
        printf("They are %.2f+%.2f,%.2f-%.2f\n",r1,r2);
    }
    else if(dis<0)
    {
        printf("roots are imaginary\n");
        printf("They are %.2fi+%.2fj,%.2fi-%.2fj\n",r1,r2,r1,r2);

    }
    else
    {
        printf("roots are real and equal\n");
        if(r1>0&&r2>0)
        printf("They are %.2fi+%.2fj,%.2fi+%.2fj\n",r1,r2,r1,r2);
        else
        printf("They are %.2fi%3.2fj,%3.2fi%3.2fj\n",r1,r2,r1,r2);
    }

    printf("\n***Finding Volume of cylinder\n**");
    printf("Enter radius of cylinder\n");
    scanf("%3.2f",&rcy);
    printf("Enter height of cylinder\n");
    scanf("%.2f",&h);
    v=2*PI*rcy*(rcy+h);
      printf("Volume of cylinder is:%.2f\n",v);
    return 0;

}
