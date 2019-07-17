#include<stdio.h>
#include<conio.h>
int player1,player2;
char ans;
void main()
{
        while(1)
        {
            system("cls");
            setupFirstPlayer();
            gameStart();
            getch();
        }
}
int selectSecondPlayer()
{
    int ch;
    printf("\n1.Select Rock");
    printf("\n2.Select Paper");
    printf("\n3.Select Scissor");
    printf("\n4.Select Exit");
    printf("\nEnter Your Choice: ");
    scanf("%d",&ch);
    return(ch);
}
void setupFirstPlayer()
{
    label:
        player1=rand()%4;                                     //  player1=computer
        if(player1==0)                                        //  player2=you
            goto label;
    player2=selectSecondPlayer();
}
void gameStart()
{
    switch(player2)
    {
    case 1:
        if(player1==1)
        {
            printf("\nMatch Draw");
            printf("\nPlayer1=Rock and Player2=Rock");
        }
        else if(player1==2)
        {
            printf("\nCongratulation Player1 Win");
            printf("\nPlayer1=Rock and Player2=Paper");                //  player1=computer
        }                                                              //  player2=you
        else
        {
            printf("\nCongratulation Player2 Win");
            printf("\nPlayer1=Rock and Player2=Scissor");
        }
        break;
    case 2:
         if(player1==1)
        {
            printf("\nCongratulation Player2 Win");
            printf("\nPlayer1=Paper and Player2=Rock");
        }
        else if(player1==2)
        {
            printf("\nMatch Draw");
            printf("\nPlayer1=Paper and Player2=Paper");              //player1=computer
        }                                                             //player2=you
        else
        {
            printf("\nCongratulation Player1 Win");
            printf("\nPlayer1=Paper and Player2=Scissor");
        }
        break;
    case 3:
        if(player1==1)
        {
            printf("\nCongratulation Player1 Win");
            printf("\nPlayer1=Scissor and Player2=Rock");
        }
        else if(player1==2)
        {
            printf("\nCongratulations Player2 Win");
            printf("\nPlayer1=Scissor and Player2=Paper");               //player1=computer
        }                                                                //player2=you
        else
        {
            printf("\nCongratulations Player2 Win");
            printf("\nPlayer1=Scissor and Player2=Scissor");
        }
        break;
    case 4:
        exit(0);
    default:
        printf("\nEnter The correct number");
    }
}

