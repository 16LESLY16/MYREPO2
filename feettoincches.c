#include <stdio.h>

const double cm_to_feet = 30.48;
const double cm_to_inch = 2.54; // (0.39);

int main(void)
{
	float cm, inches;
	int feet;

	printf("Enter a height in centimeters (<=0 to quit): ");
	scanf("%f", &cm);

	while(cm > 0)
	{

		feet = cm / cm_to_feet;
		inches = (int) cm % (int) cm_to_inch;

		printf("%.1f cm = %d feet, %.1f inches\n", cm, feet, inches);

		printf("Enter a height in centimeters (<=0 to quit): ");
		scanf("%f", &cm);
	}

	printf("Done!\n");

	return 0;
}
