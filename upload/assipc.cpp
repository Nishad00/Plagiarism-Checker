#include <stdio.h>
#include <iostream> 
#include <string.h>
#include <sys/wait.h>
#include <unistd.h> 
using namespace std;

int main()
{
    pid_t pid;
    char buffer[100];
    int fd1[2] , fd2[2];
    pipe(fd1);
    if (pipe(fd1)<0) 
    { 
        fprintf(stderr, "Pipe Failed" ); 
        return 1; 
    } 
    pipe(fd2);
    if (pipe(fd2)<0) 
    { 
        fprintf(stderr, "Pipe Failed" ); 
        return 1; 
    }
    pid = fork();
     if (pid < 0) 
    { 
        fprintf(stderr, "Fork Failed" ); 
        return 1; 
    } 
    if (pid > 0) 
    {
        int i;
        close(fd1[1]); 
        read(fd1[0], buffer, sizeof(buffer));
        for(i = 0; i<sizeof(buffer); i++) {
            if(islower(buffer[i]))
                buffer[i] = toupper(buffer[i]);
            else
                buffer[i] = tolower(buffer[i]);
        }
        write(fd2[1], buffer, strlen(buffer) + 1);
        wait(NULL); 
    }else if (pid == 0){
        close(fd1[0]); 
        printf("input: ");
        fgets(buffer, sizeof(buffer), stdin);
        printf("The original message is %s", buffer);
        write(fd1[1], buffer, strlen(buffer) + 1);
        read(fd2[0], buffer, sizeof(buffer));
        printf("The message is %s",buffer);
        exit(0);
    }
    return 0;
}