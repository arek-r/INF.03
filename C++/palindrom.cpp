#include <bits/stdc++.h>
using namespace std;

int main() {
    string s;
    cin >> s;
//    int d = s.length();
    string r = "";
    int i{};

    while(i < s.length()) {
        r = s[i] + r;
        i++;
    }

    cout << s << " " << r << "\n";

    if(s == r)
        cout << "Tak\n";
    else
        cout << "nie\n";

    return 0;
}
