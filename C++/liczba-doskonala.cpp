#include <bits/stdc++.h>
#include <math.h>
using namespace std;

int main() {
    int n;
    cin >> n;
    int p{1}, sum{};
    while(p < n) {
        if(n % p == 0)
            sum = sum + p;
        p++;
    }
    if(sum == n)
        cout << "Tak\n";
    else
        cout << "Nie\n";
    return 0;
}

