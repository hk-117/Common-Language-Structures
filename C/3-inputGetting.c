#include <stdio.h>

int main(){
    char c;
    int i;
    float f;
    char str[20];

    printf("getchar(): ");
    c = getchar();
    getchar(); //to avoid the \n remaining in buffer
    printf("Got using getchar(): %c\n",c);

    printf("gets(): ");
    gets(str);
    printf("Got using gets(): %s\n",str);

    printf("char,int,float,string scanf(): ");
    scanf("%c %d %f %s",&c,&i,&f,str);
    printf("Got using scanf(): %c %d %f %s\n",c,i,f,str);
}
