#include <bits/stdc++.h>
#include <math.h>
using namespace std;

int main() {
    int x, y ,z, t;
    cin >> x >> y >> z >> t;
    int a, b;
    if(x > y)
        a = x;
    else
        a = y;

    if(z > t)
        b = z;
    else
        b = t;

    if(a > b)
        cout << a << "\n";
    else
        cout << b << "\n";

    int counter{};



    return 0;
}
