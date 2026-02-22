#include <iostream>
#include <string>

struct Village {
    std::string name = "Vadal";
    std::string district = "Junagadh";
    std::string state = "Gujarat";
    int pincode = 362310;
};

int main() {
    Village v;
    std::cout << "--- " << v.name << " Village Profile ---" << std::endl;
    std::cout << "District: " << v.district << std::endl;
    std::cout << "State:    " << v.state << std::endl;
    std::cout << "PIN Code: " << v.pincode << std::endl;
    return 0;
}
