<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function login_insert($name_customer,$password,$email,$avatar){
    $sql = "INSERT INTO customer(name_customer,password,email,avatar) VALUES(?,?,?,?)";
    return pdo_execute($sql, $name_customer,$password,$email,$avatar);
}
/**
 * Cập nhật tên loại
 * @param int $id_customer là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function login_update($id_customer, $name_customer,$password,$email,$avatar){ // lưu ý phần này khóa chính luôn nằm đầu vidu id_customer
    $sql = "UPDATE customer SET name_customer=?,password=?,email=?,avatar=? WHERE id_customer=?";
    return pdo_execute($sql, $name_customer,$password,$email,$avatar,$id_customer);  // lưu ý phần này khóa chính luôn nằm cuối vidu id_customer
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $id_customer là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function login_delete($id_customer){
    $sql = "DELETE FROM customer WHERE id_customer=?";
    if(is_array($id_customer)){
        foreach ($id_customer as $ma) {
            return pdo_execute($sql, $ma);
        }
    }
    else{
        return pdo_execute($sql, $id_customer);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function login_select_all(){
    $sql = "SELECT * FROM customer ORDER BY id_customer DESC";
    return pdo_query($sql);
}
function login_select_sethome(){ // copy xún đổi all thành tên sethome
    $sql = "SELECT * FROM loai WHERE sethome=1 ORDER BY id_customer DESC";
    return pdo_query($sql);
}

/**
 * Truy vấn một loại theo mã
 * @param int $id_customer là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function login_select_by_id($id_customer){
    $sql = "SELECT * FROM loai WHERE id_customer=?";
    return pdo_query_one($sql, $id_customer);
}
function login_sethome_sort($sethome,$sort){
    $sql = "SELECT * FROM loai WHERE sethome=? and sort=?";
    return pdo_query_one($sql, $sethome,$sort);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $id_customer là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function login_exist($id_customer){
    $sql = "SELECT count(*) FROM loai WHERE id_customer=?";
    return pdo_query_value($sql, $id_customer) > 0;
}
//menu đa cấp
//function Menu($parent = 0,$space = '---', $trees = NULL){ 
//        if(!$trees){ $trees = array(); }
//	$sql = mysql_query("SELECT * FROM loai WHERE parent = ".intval($parent)." ORDER BY tenloai"); 
//	while($rs = mysql_fetch_assoc($sql)){ 
//		$trees[] = array('id_customer'=>$rs['id_customer'],'tenloai'=>$space.$rs['tenloai']); 
//		$trees = Menu($rs['id_customer'],$space.'---',$trees); 
//	} 
//	return $trees; 
//}
?>