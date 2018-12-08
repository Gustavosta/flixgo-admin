<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function country_insert($name_country){
    $sql = "INSERT INTO country(name_country) VALUES(?)";
    return pdo_execute($sql, $name_country);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function country_update($id_country, $name_country){ // lưu ý phần này khóa chính luôn nằm đầu vidu ma_loai
    $sql = "UPDATE country SET name_country=? WHERE id_country=?";
    return pdo_execute($sql, $name_country,$id_country);  // lưu ý phần này khóa chính luôn nằm cuối vidu ma_loai
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function country_delete($id_country){
    $sql = "DELETE FROM country WHERE id_country=?";
    if(is_array($id_country)){
        foreach ($id_country as $ma) {
            return pdo_execute($sql, $ma);
        }
    }
    else{
        return pdo_execute($sql, $id_country);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function country_select_all(){
    $sql = "SELECT * FROM country ORDER BY id_country DESC";
    return pdo_query($sql);
}
function country_select_sethome(){ // copy xún đổi all thành tên sethome
    $sql = "SELECT * FROM loai WHERE sethome=1 ORDER BY ma_loai DESC";
    return pdo_query($sql);
}

/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function country_select_by_id($ma_loai){
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}
function country_sethome_sort($sethome,$sort){
    $sql = "SELECT * FROM loai WHERE sethome=? and sort=?";
    return pdo_query_one($sql, $sethome,$sort);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function country_exist($ma_loai){
    $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}
//menu đa cấp
//function Menu($parent = 0,$space = '---', $trees = NULL){ 
//        if(!$trees){ $trees = array(); }
//	$sql = mysql_query("SELECT * FROM loai WHERE parent = ".intval($parent)." ORDER BY tenloai"); 
//	while($rs = mysql_fetch_assoc($sql)){ 
//		$trees[] = array('ma_loai'=>$rs['ma_loai'],'tenloai'=>$space.$rs['tenloai']); 
//		$trees = Menu($rs['ma_loai'],$space.'---',$trees); 
//	} 
//	return $trees; 
//}
?>