#include <iostream>
#include <deque>
#include <math.h>
using namespace std;
void p1_bucket(int arr[], int n, int d)
{
    deque<int> v[10];
    for (int i = 0; i < n; i++)
    {
        int elem = arr[i] / d;
        int elem2 = elem % 10;
        v[elem2].push_back(arr[i]);
    }
    int j = 0;
    for (int i = 0; i < n; i++)
    {
        if (!v[j].empty())
        {
            arr[i] = v[j].front();
            v[j].pop_front();
        }
        else
        {
            j++;
            i--;
        }
    }
}
void bucket(int arr[], int n, int digit)
{

    for (int i = 0; i < digit; i++)
    {
        p1_bucket(arr, n, pow(10, i));
    }
}
void display(int arr[], int n)
{
    cout << "your array: ";
    for (int i = 0; i < n; i++)
    {
        cout << arr[i] << " ";
    }
    cout << endl;
}
int main()
{
    cout << "\t\tCreated By Manav - 20CP034" << endl;
    int n, m;
    cout << "Enter size of the array..." << endl;
    cin >> n;

    cout << "Enter number of the digits" << endl;
    cin >> m;

    int arr[n];

    cout << "Enter the elements now :" << endl;
    for (int i = 0; i < n; i++)
    {
        cin >> arr[i];
    }
    cout << "Unsorted Array : ";
    display(arr, n);

    bucket(arr, n, m);

    cout << "Sorted Array :  ";
    display(arr, n);

    return 0;
}