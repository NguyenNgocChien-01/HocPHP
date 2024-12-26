## Lập trình truyền thống
+ Không cấu trúc
+ hướng thủ tục
+ hướng module
## OOP
+ Code đơn giản hơn trong việc
    + Constructor
        HÀM cùng tên với class thì nó là contructor
+ Public: có thể truy cập thẳng được 
+ Private: không thể truy cập thẳng ra được => bảo mật
+ Protected: Chỉ cho phép truy xuất nội bộ trong lớp đó và lớp kế thừa, lớp bên ngoài
sẽ không truy xuât được
+ Các trường hợp hàm khởi tạo kế thùa:
    + A có B không: new B() chạy hàm A
    + A có B có: chạy hàm B
    + A không B có: chạy hàm B
+ Hàm hủy __destruct(): tạo đối tượng, sử dụng rồi ko muốn sử dụng nữa
+ Class Abstract: Cha có tạo hàm bắt buộc thì class con cũng phải có
                - Chỉ có nhiệm vụ tạo hàm, không tạo lệnh bên trong đó
                - Tất cả phương thức của class abtract phải được khai báo abtract public/protected

+ Class Final: Không class nào có thể kế thừa final class SinhVien{}
+ Function Final : Gần giống với Class final, khi dùng function final thì không thể gọi lại, kiểu như không thể chỉnh sửa nữa, VD final function gioithieu() trong class SinhVien đã có, thì class học sinh kế thừa class sinhvien không được gọi lại final function để chỉnh sửa

## interface:
    + Các hàm trong interface chỉ được khai mà không được định nghĩa
    + Interface không phải là một class hay là một đối tượng nào cả
    + Sử dụng implements thì là interface
    + Interface không phải một class nhưng có tính kế thừa

## Quy ước đặt tên
    + Đặt tên cho thuộc tính => danh từ hoặc tính từ
    + Đặt tên cho phương thức => Động từ, dạng hành động

    + public: đặt bth
    +private: $__<tên>  2 gạch dưới
    + protected: $_<Tên> 1 gạch dưới

## Đa hình
    + Lớp con sẽ viết lại những phương thức của lớp cha (overwrite)
    + Class B extend A, A có function => B viết lại function đó 
## Mô hình MVC


## md5() : ma hoa