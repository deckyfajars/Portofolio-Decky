#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>
#include <windows.h>

typedef struct{
    char* judul[6];
    int ray[6];
}Film;

void menu();
void menumovie();
void beli();
void isisaldo();
void cek();

int main()
{
    Film f, *ptrF;
    f.judul[0]="FAST_FURIOUS";
    f.ray[0]=60000;
    f.judul[1]="LOGAN";
    f.ray[1]=40000;
    f.judul[2]="DANUR";
    f.ray[2]=55000;
    f.judul[3]="GUARDIANS_OF_GALAXY";
    f.ray[3]=70000;
    f.judul[4]="KIMINONAWA";
    f.ray[4]=65000;
    f.judul[5]="HAPPY_GHOST";
    f.ray[5]=30000;
    ptrF=&f;

    system("COLOR 5B");

    int i,N,n,j,pos;
    int sum;
    sum=50000;
    char nama[50]="admin";
    char nam[50];
    char pin[50]="admin123";
    char pinn[50];
    char carifilm[50];
    int a1;
    int m1,m2,m3,film;
    int e1,e2,e3;
    int vouc,k;
    int ray[5];
    int max;
    max=0;
    char* judul[100];
    vouc=987654321;




    for (i=0;i<=100;i++){

        printf("\n\n\n\n\n\n\n\n\n\n\n\n\n\t\t\t\t\t\tLoading ... %d%%",i);
        system("cls");
    }
    printf("\n\n\n\n\n\n\n\n\n\n\n\n\n\t\t\t\t\t\tLoading ... 100%%\n");
    printf("\t\t\t\t\t\t    E-CINEMA");
    Sleep(2000);

    system("cls");


    int batas;
    int status;
    status=0;
    batas=0;


    while (batas<3){
    printf("\n\n\n\n\n\n\n\n\n\n\n\n\t\t\t\t\t\tLOGIN\n ");
    printf("\n\t\t\t\t\t\tID  : ");
    gets(nam);
    printf("\t\t\t\t\t\tPIN : ");
    gets(pinn);


    if(strcmp(nama,nam)==0 && strcmp(pin,pinn)==0){

        system("cls");
        printf("\n\n\n\n\n\n\n\n\n\n\n\n\t\t\t\t\t\tWELCOME TO E-CINEMA\n\n\n\n\n");
        Sleep(2000);
        system("cls");

        break;
    } else {

        printf("\n\t\t\t\t\t\tID dan PIN anda salah !!!\n");
        printf("\n\t\t\t\t\t\tSILAHKAN COBA LAGI !!!");
        Sleep(1500);
        }
    system("cls");
    batas++;

    if (batas==3){
        printf("\n\n\n\n\n\n\n\n\n\n\n\n\t\t\t\t\t\tMAAF AKUN ANDA DI BLOKIR SEMENTARA\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
        }
    status++;
    }
    system("exit");
    menu:
    if(strcmp(nama,nam)==0 && strcmp(pin,pinn)==0){
    menu();

    printf("\nSilahkan Pilih : ");
    scanf("%d",&a1);
    system("cls");

    switch(a1){
        case 1 :
        menufilm:
        menumovie();
        printf("\n\nSilahkan Pilih : ");
        scanf("%d",&film);
        system("cls");

            if(film==7){
            goto menu;
                getch();
        }

        pilihan();
        printf("\n\nSilahkan Pilih : ");
        scanf("%d",&m2);
        system("cls");
        if(m2==2){
            goto menufilm;
            getch();
        }
        system("cls");
        if (sum>=f.ray[0] && film==1){
            sum=sum-f.ray[0];
            printf("Film -%s- seharga %d telah TERBELI !\n\nSisa saldo anda sebesar Rp.%d\n",f.judul[0],f.ray[0],sum);
        } else if (sum>=f.ray[1] && film==2){
            sum=sum-f.ray[1];
             printf("Film -%s- seharga %d telah TERBELI !\n\nSisa saldo anda sebesar Rp.%d\n",f.judul[1],f.ray[1],sum);
        } else if (sum>=f.ray[2] && film==3){
            sum=sum-f.ray[2];
             printf("Film -%s- seharga %d telah TERBELI ! \n\nsisa saldo anda sebesar Rp.%d\n",f.judul[2],f.ray[2],sum);
        } else if (sum>=f.ray[3] && film==4){
            sum=sum-f.ray[3];
             printf("Film -%s- seharga %d telah TERBELI !\n\nSisa saldo anda sebesar Rp.%d\n",f.judul[3],f.ray[3],sum);
        } else if (sum>=f.ray[4] && film==5){
            sum=sum-f.ray[4];
             printf("Film -%s- seharga %d telah TERBELI !\n\nSisa saldo anda sebesar Rp.%d\n",f.judul[4],f.ray[4],sum);
        } else if (sum>=f.ray[5] && film==6){
            sum=sum-f.ray[5];
             printf("Film -%s- seharga %d telah TERBELI !\n\nSisa saldo anda sebesar Rp.%d\n",f.judul[5],f.ray[5],sum);
        }else printf("SALDO anda sebesar %d, TIDAK MENCUKUPI!\nSILAHKAH ISI SALDO TERLEBIH DAHULU\n",sum);

        printf("\n1. Kembali\n");
        printf("\nSilahkan Pilih : ");
        scanf("%d",&e2);
        system("cls");
        if(e2==1){
            goto menufilm;
            getch();

        }
        case 2:

        printf("Saldo anda saat ini sebesar Rp.%d\n",sum);

        printf("\n1. Kembali\n");

        printf("\nSilahkan Pilih : ");
        scanf("%d",&e1);
        system("cls");
        if(e1==1){
            goto menu;
            getch();
        }


    int batas1;
    batas1=0;
    system("cls");
        case 3:
            while (batas<3){
            printf("Masukan voucher : ");
            scanf("%d",&vouc);
            if (vouc==987654321){
            system("cls");
            printf("CORRECT ! \n\nWAITING ...");
            Sleep(2000);
            system("cls");
            printf("Masukan saldo yang ingin ditambah : Rp.");
            scanf("%d",&N);
            if(sum>=0){
                sum=N+sum;
                printf("\nSELAMAT ! Saldo sekarang adalah Rp.%d\n",sum);
                printf("\n1.KEMBALI\n");
                printf("\nSilahkan Pilih : ");
                scanf("%d",&e3);
                system("cls");
                goto menu;
                    getch();
                }
            }

            else printf("\nINCORRECT !!!");
            batas++;
            Sleep(2000);
            system("cls");
            goto menu;
            getch();
            }

       case 4:

        sort(n,f.ray);

        for(i=0;i<6;i++){
            printf("%d.Rp.%d\n",i+1,f.ray[i]);
        }
        printf("=========================");
        printf("\n1. HAPPY_GHOST");
        printf("\n2. LOGAN ");
        printf("\n3. DANUR");
        printf("\n4. FAST_FURIOUS");
        printf("\n5. KIMINONAWA");
        printf("\n6. GUARDIANS_OF_GALAXY\n");

        printf("\n1. Kembali");
        printf("\n\nSilahkan pilih :");
        scanf("%d",&m3);

        if(m3==1){
           system("cls");
            goto menu;
            getch();
        }

        case 5:
            cari:
            printf("NOW SHOWING\n\n");
            for(i=0;i<6;i++){
                printf("%d. %s \n",i+1,f.judul[i]);
            }

                printf("\nJudul film yang akan dicek : ");
                scanf("%s",&carifilm);

                i=0;
                bool  ketemu=false;
                while ((i<6) && (!ketemu)){
                    if (strcmpi(carifilm,f.judul[i])==0){
                        ketemu=true;
                    }
                i++;
                }

                if (ketemu){
                    printf("Film %s seharga Rp.%d\n",f.judul[i-1],f.ray[i-1]);
                }

                else printf("\nMAAF ! Film %s tidak tayang\n\n",carifilm);

                printf("\n1. Lanjut\n");
                printf("2. Kembali");
                printf("\n\nSilahkan Pilih : ");
                scanf("%d",&e2);
                system("cls");
                if(e2==1){
                goto cari;
                getch();
            }
                if(e2==2){
                goto menu;
                getch();

            }

        case 6:
            logout();
            Sleep(2000);
            system("cls");
            goto exit;
            getch();

            system("pause");
        }

    }
    exit:
    return 0;
}

void menu(){
printf("\t\t\t\t\t================E-CINEMA==============\n");
printf("MENU UTAMA\n");
printf("\n* 1. BELI MOVIES      *\n");
printf("* 2. CHECK SALDO      *\n");
printf("* 3. ISI SALDO        *\n");
printf("* 4. SORT FILM        *\n");
printf("* 5. CHECK HARGA FILM *\n");
printf("* 6. LOGOUT           *\n");
}
void menumovie(){
printf("\t\t\t\t\t================E-CINEMA==============\n");
printf("NOW SHOWING !!!\n");
printf("\n** 1. FAST_FURIOUS          ** \n");
printf("** 2. LOGAN                 ** \n");
printf("** 3. DANUR                 **\n");
printf("** 4. GUARDIANS_OF_GALAXY   **\n");
printf("** 5. KIMINONAWA            **\n");
printf("** 6. HAPPY_GHOST           **\n");
printf("===================================\n");
printf("** 7. KEMBALI               **");
}

void pilihan(){
printf("1. Beli\n");
printf("2. KEMBALI");
}

void logout(){
printf("\t\t\t\t\t================TERIMA KASIH==============\n\n");
printf("\t\t\t\t================TELAH MENGGUNAKAN E-CINEMA==============\n\n");
}

void sort(int n,int tab[]){
    int i,j,kec,tmp;

    for (i=0;i<6;i++){
    kec=i;
    for(j=i+1;j<6;j++){
        if(tab[kec] > tab[j]){
            kec=j;
        }
    }
    tmp=tab[kec];
    tab[kec]=tab[i];
    tab[i]=tmp;

    }
}


