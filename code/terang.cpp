#include<iostream>
#include<string.h>
#include<stdio.h>
using namespace std;

int main(){
    int M,N;
    cin>>M>>N;
    char bin[M];
    while(N--){
        int T;
        cin>>T;
        while(T--){
            int A;
            cin>>A;
            if(bin[A] == '0')
                bin[A] ='1';
            else
                bin[A] = '0';
        }
    }
    cout<<bin;
}
