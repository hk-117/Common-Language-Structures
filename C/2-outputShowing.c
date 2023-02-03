#include <stdio.h>

int main(){
    char c= 'Z';
    char *str = "Hello";
    int a = 10;
    float f = 34.84;

    printf("Showing using putchar(): ");
    putchar(c);
    putchar('\n');

    printf("Showing using puts(): ");
    puts(str); //Automatic \n

    printf("Showing using printf(): ");
    printf("%d %.3f %c %s\n",a,f,c,str);
}
