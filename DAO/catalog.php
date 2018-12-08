<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_catalog là tên loại
 * @throws PDOException lỗi thêm mới
 */
function catalog_insert($name_cata,$stt){
    $sql = "INSERT INTO catalog(name_cata,stt) VALUES(?,?)";
    return pdo_execute($sql, $name_cata,$stt);
}
/**
 * Cập nhật tên loại
 * @param int $id_cata là mã loại cần cập nhật
 * @param String $ten_catalog là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function catalog_update($id_cata, $name_cata,$stt){ // lưu ý phần này khóa chính luôn nằm đầu vidu id_cata
    $sql = "UPDATE catalog SET name_cata=?,stt=? WHERE id_cata=?";
    return pdo_execute($sql, $name_cata,$stt,$id_cata);  // lưu ý phần này khóa chính luôn nằm cuối vidu id_cata
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $id_cata là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function catalog_delete($id_cata){
    $sql = "DELETE FROM catalog WHERE id_cata=?";
    if(is_array($id_cata)){
        foreach ($id_cata as $ma) {
            return pdo_execute($sql, $ma);
        }
    }
    else{
        return pdo_execute($sql, $id_cata);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function catalog_select_all(){
    $sql = "SELECT * FROM catalog ORDER BY id_cata DESC";
    return pdo_query($sql);
}
function catalog_select_sethome(){ // copy xún đổi all thành tên sethome
    $sql = "SELECT * FROM catalog WHERE sethome=1 ORDER BY id_cata DESC";
    return pdo_query($sql);
}

/**
 * Truy vấn một loại theo mã
 * @param int $id_cata là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function catalog_select_by_id($id_cata){
    $sql = "SELECT * FROM catalog WHERE id_cata=?";
    return pdo_query_one($sql, $id_cata);
}
function catalog_sethome_sort($sethome,$sort){
    $sql = "SELECT * FROM catalog WHERE sethome=? and sort=?";
    return pdo_query_one($sql, $sethome,$sort);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $id_cata là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function catalog_exist($id_cata){
    $sql = "SELECT count(*) FROM catalog WHERE id_cata=?";
    return pdo_query_value($sql, $id_cata) > 0;
}
//menu đa cấp
//function Menu($parent = 0,$space = '---', $trees = NULL){ 
//        if(!$trees){ $trees = array(); }
//	$sql = mysql_query("SELECT * FROM catalog WHERE parent = ".intval($parent)." ORDER BY tencatalog"); 
//	while($rs = mysql_fetch_assoc($sql)){ 
//		$trees[] = array('id_cata'=>$rs['id_cata'],'tencatalog'=>$space.$rs['tencatalog']); 
//		$trees = Menu($rs['id_cata'],$space.'---',$trees); 
//	} 
//	return $trees; 
//}
?>