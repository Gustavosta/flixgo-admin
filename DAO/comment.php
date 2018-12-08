<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function comment_insert($content,$id_customer,$id_movie,$full_name,$likes,$unlikes,$types){
    $sql = "INSERT INTO comment(content,id_customer,id_movie,full_name,likes,unlikes,types) VALUES(?,?,?,?,?,?,?)";
    return pdo_execute($sql, $content,$id_customer,$id_movie,$full_name,$likes,$unlikes,$types);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function comment_update($id_comment, $content,$id_customer,$id_movie,$full_name,$likes,$unlikes,$types){ // lưu ý phần này khóa chính luôn nằm đầu vidu ma_loai
    $sql = "UPDATE comment SET content=?,id_customer=?,id_movie=?,full_name=?,likes=?,unlikes=?,types=? WHERE id_comment=?";
    return pdo_execute($sql, $content,$id_customer,$id_movie,$full_name,$likes,$unlikes,$types, $id_comment);  // lưu ý phần này khóa chính luôn nằm cuối vidu ma_loai
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function comment_delete($id_comment){
    $sql = "DELETE FROM comment WHERE id_comment=?";
    if(is_array($id_comment)){
        foreach ($id_comment as $ma) {
            return pdo_execute($sql, $ma);
        }
    }
    else{
        return pdo_execute($sql, $id_comment);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function comment_select_all(){
    $sql = "SELECT * FROM comment ORDER BY id_comment DESC";
    return pdo_query($sql);
}
function comment_select_sethome(){ // copy xún đổi all thành tên sethome
    $sql = "SELECT * FROM loai WHERE sethome=1 ORDER BY ma_loai DESC";
    return pdo_query($sql);
}

/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function comment_select_by_id($ma_loai){
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}
function comment_sethome_sort($sethome,$sort){
    $sql = "SELECT * FROM loai WHERE sethome=? and sort=?";
    return pdo_query_one($sql, $sethome,$sort);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function comment_exist($ma_loai){
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