#include<iostream>
using namespace std;

int main(){
    string n;
    while(getline(cin, n)){
        string s;
        int a = 3,b=2;
        s = n.substr(a,b);
        cout<<s<<endl;
    }
}
