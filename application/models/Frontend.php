<?php


class Frontend  extends CI_Model{
    public function __construct(){
        parent::__construct();
//        $ci &=get_instance();
        $this->load->database();

        $this->load->model('Service_cate_model','cate');
        $this->load->model('Service_model','serv');
        // 
    }
   
   
    public function layout()
    {

        $layout= array();
        //Mnu
        // // -----------------Mnu Khai giảng
        // $List_Khaigiang=$this->article_model->getList_byCmaId_Limit(26,0,0);
        // $Khaigiang=$this->danhmuc_model->getList_byCmaId(26);
        // foreach ($Khaigiang as $key => $set) {
        //   $dma_id=$set['dma_id'];          
        //   $Baiviet=array();
        //   $Baiviet=$this->article_model->getList_byDmaId_Limit($dma_id,0);
        //   foreach ($Baiviet as $key2 => $set) {
        //     $Baiviet_out[$key][]=array(
        //       'a_link'=>$set['a_slug'].'.html',
        //       'a_title'=>$set['a_title']

        //       );
        //   }
        //   $count=count($Baiviet);
        //   if (($count != 0) && ($count==1)) {
        //     $Khaigiang_out[]=array(//Dữ liệu bài viết của các Danh mục trong Hoạt động
        //       'info'=>array(
        //         'dma_link'=>$Baiviet_out[$key][0]['a_link'],
        //         'dma_title'=>$Baiviet_out[$key][0]['a_title'],
        //         ),
        //       'count'=>$count,
        //     );
        //   }else
        //   {$Khaigiang_out[]=array(//Dữ liệu bài viết của các Danh mục trong Hoạt động
        //     'info'=>array(
        //       'dma_link'=>$set['dma_slug'].'.html',
        //       'dma_title'=>$set['dma_title'],
        //       ),
        //     'count'=>$count,
        //     'baiviet'=>$Baiviet_out[$key]
        //     // 'data_cate'=>$Khac_baiviet
        //   );}
        // }
        // // -----------------Mnu khóa học
        // $List_Khoahoc=$this->product_model->getList();//Danh sách các bài viết khóa học
        // $Khoahoc=$this->category_model->getList();//Danh sách các Danh mục khóa học
        
        // $Khoahoc_out=array();
        // foreach ($Khoahoc as $key => $set) {
        //   $dma_id=$set['catp_id']; 
        //   $Baiviet=array();
        //   $Baiviet=$this->product_model->getList_bySameCateId($dma_id);
        //   $count=count($Baiviet);
         
        //   if(($count <> 0 ) && ($count ==1))
        //     $Khoahoc_out[]=array(//1 Danh mục có 1 bài viết khóa học
        //       // 'info'=>aray(
        //           'id' => $dma_id
        //           ,'khoahoc_title' => $Baiviet[0]['product_name']
        //           ,'khoahoc_link' => $Baiviet[0]['product_slug'].'.html'
        //         // )
        //         ,'count'=>$count
        //     );
        //   else//1 Danh mục có nhiều bài viết khóa học
        //   {
        //     $Khoahoc_out[]=array(
        //       // 'info'=>aray(
        //           'id' => $dma_id
        //           ,'khoahoc_title' => $set['catp_name']
        //           ,'khoahoc_link' => $set['catp_slug'].'.html'
        //         // )
        //         ,'count'=>$count
        //         ,'data'=>$Baiviet
        //     );
        //   }
        // }
        //   // echo "<pre>";
        //   // print_r($Khoahoc);
        //   // echo "</pre>";
        // // -----------------Mnu Hoạt động
        // $Hoatdong=$this->danhmuc_model->getList_byCmaId(27);

        // // -----------------Mnu Tài liệu
        // $Tailieu=$this->danhmuc_model->getList_byCmaId(29);
        // foreach ($Tailieu as $key => $set) {
        //   $dma_id=$set['dma_id'];    
        //   // echo $dma_id;      
        //   $Baiviet_tailieu=array();
        //   $Baiviet_tailieu=$this->article_model->getList_byDmaId_Limit($dma_id,0);
        //   // echo "<pre>";
        //   // print_r($Baiviet_tailieu);
        //   // echo "</pre>";
        //   $count=count($Baiviet_tailieu);
        
        //   foreach ($Baiviet_tailieu as $key2 => $set2){ 
        //     $Baiviet_tailieu_out[$key2]=array(
        //       'a_link'=>$set2['a_slug'].'.html',
        //       'a_title'=>$set2['a_title']

        //       );
        //   }
        //   if (($count <> 0 ) && ($count ==1)) //1 Danh mục có 1 bài viết
        //     $Tailieu_out[]=array(
        //       // 'info'=>$set
        //       'info'=>array(
        //         'dma_link'=>$Baiviet_tailieu[0]['a_slug'].'.html'
        //         ,'dma_title'=>$Baiviet_tailieu[0]['a_title']
        //         )
        //       ,'count'=>$count
        //       // ,'data'=>$Baiviet_tailieu_out

        //     );
        //   else //1 Danh mục có nhiều bài viết
        //     $Tailieu_out[]=array(
        //       // 'info'=>$set
        //       'info'=>array(
        //         'dma_link'=>$set['dma_slug'].'.html'
        //         ,'dma_title'=>$set['dma_title']
        //         )
        //       ,'count'=>$count
        //       ,'data'=>$Baiviet_tailieu_out

        //     );
          
        // }
        //Photo
        // $photoSlideshow=$this->article_model->getList_byDmaId(29);
        // $config=$this->config_model->getList();

        // $ListCmaId=array('27','29','30');  
        // $new_article=$this->article_model->getList_byCmaId_Limit_New($ListCmaId,$limit=10,$detail=0);
        // $Mnu_sp_cate=$this->category_model->getList();
        // $tintucmoi=$this->article_model->getList_byDmaId_Limit(110,4);
        // $Mnu_tintuc=$this->danhmuc_model->getList_byCmaId(39);
        $cate=$this->cate->getList_byParent(0,0,0,'ASC');
        $layout= array(
          'menu'=>array(
            'service'=>$cate
            // ,'tintuc'=>$Mnu_tintuc
            )
          // ,'tintucmoi'=>$tintucmoi
          // 'photo'=>array(
          //   'slideshow'=>$photoSlideshow,
          //   ),
          // 'config'=>$config,
          // 'khoahoc_list'=>$List_Khoahoc,
          // 'khaigiang_list'=>$List_Khaigiang
            
        );

       //  echo "<pre>";
       // print_r($layout);
       // echo "</pre>";
        return $layout;
    }

    // ===============service
    public function service()
    {
      // $data= array();
      
      $data=$this->cate->getList_byParent(0,0,0,'ASC');  
      foreach ($data as $key => $set1) {
         $data[$key]['child']=$this->cate->getList_byParent($set1['cate_id'],0,0,'ASC');
         $data[$key]['servs']=$this->serv->getList_byParent($set1['cate_id'],0,0,'ASC');
         foreach ($data[$key]['child'] as $key2 => $set2) {
            $data[$key]['child'][$key2]['servs']=$this->serv->getList_byParent($set2['cate_id'],0,0,'ASC');
         }
         
      }
      // $data[]    
      // $data= array(
      //   'gioithieu'=>$Gioithieu,
      // );

        return $data;
    }

    // ===============Trang chủ
    public function home()
    {
      $data= array();
      
      $Slideshow=$this->article_model->getList_byDmaId_Limit(29,0,0,'ASC');
      $tintuc=$this->article_model->getList_byDmaId_Limit(110,10);
      $Sp_cate=$this->category_model->getList();
      //Sản phẩm nổi bật
      // $FeaturedPro=$this->product_model->getList_featured($limit=8,$detail=0);
      //Sản phẩm mới nhất
      // $NewPro=$this->product_model->getList_new($limit=8,$detail=0);
      // $FeaturedPro=$this->product_model->getList_featured($limit=8,$detail=0);
      
      $data= array(
        'slideshow'=>$Slideshow,
        'sanpham'=>$Sp_cate,
        'tintuc'=>$tintuc,
      );

        return $data;
    }
    // ===============Giới thiệu
    public function gioithieu()
    {
      $data= array();
      
      $Gioithieu=$this->article_model->getList_byDmaId_Limit(108,1,1);      
      $data= array(
        'gioithieu'=>$Gioithieu,
      );

        return $data;
    }
    // ===============Sản phầm
    public function sanpham()
    {
      $data= array();
      
      $sp=$this->article_model->getList_byDmaId_Limit(109);      
      $data= array(
        'dataout'=>$sp,
      );

       //  echo "<pre>";
       // print_r($data);
       // echo "</pre>";
        return $data;

    }
    public function sanpham_cate($cid)
    {
      $data= array();
      
      $cate=$this->category_model->getOneCate($cid);      
      $havechild=$this->category_model->check_childcate($cid); 
      $subcate=$this->category_model->getSubCateByCateID($cid); 

      $data= array(
        'dataout'=>$cate,
        'child'=>$havechild,
        'subcate'=>$subcate,

      );

        return $data;
    }
    public function sanpham_detail($id)
    {
      $data= array();
      
      $sp=$this->product_model->getOne_byId($id);      
      $data= array(
        'dataout'=>$sp,
      );

        return $data;
    }
    // ===============Dự Án
    public function duan()
    {
      $data= array();
      
      $Duan=$this->article_model->getList_byDmaId_Limit(109);      
      $data= array(
        'dataout'=>$Duan,
      );

       //  echo "<pre>";
       // print_r($data);
       // echo "</pre>";
        return $data;

    }
    public function duan_detail($aid)
    {
      $data= array();
      
      $Duan=$this->article_model->getOne_byAId($aid);      
      $data= array(
        'dataout'=>$Duan,
      );

        return $data;
    }
    // ===============Tin tức
    public function tintuc($id)
    {
      $data= array();
      
      $Tintuc=$this->article_model->getList_byDmaId_Limit($id);      
      $data= array(
        'dataout'=>$Tintuc,
      );

       //  echo "<pre>";
       // print_r($data);
       // echo "</pre>";
        return $data;

    }
    public function tintuc_detail($aid)
    {
      $data= array();
      
      $Tintuc=$this->article_model->getOne_byAId($aid);      
      $data= array(
        'dataout'=>$Tintuc,
      );

        return $data;
    }
    // ===============Góc chuyên gia
    public function gocchuyengia()
    {
      $data= array();
      
      $Gocchuyengia=$this->article_model->getList_byDmaId_Limit(111);      
      $data= array(
        'gocchuyengia'=>$Gocchuyengia,
      );

        return $data;
    }
    public function gocchuyengia_detail($aid)
    {
      $data= array();
      
      $Gocchuyengia=$this->article_model->getOne_byAId($aid);      
      $data= array(
        'dataout'=>$Gocchuyengia,
      );

        return $data;
    }
    // public function cate_productlist($cate)
    // {
    //   $data= array();
    //   $CatePro=$this->category_model->getOneCate($cate);
    //   $ListPro=$this->product_model->getList_sameCate($cate);
      
    //   $data= array(
    //     // 'product'=>array(
    //       'cate'=>$CatePro,
    //       'product'=>$ListPro,
    //     // ),          
    //   );

    //   return $data;
    // }
    // public function search_productlist($search)
    // {
    //   $data= array();
    //   // $CatePro=$this->category_model->getOneCate($cate);
    //   $ListPro=$this->product_model->searchProduct($search);
      
    //   $data= array(
    //     // 'product'=>array(
    //       // 'cate'=>$CatePro,
    //       'product'=>$ListPro,
    //     // ),          
    //   );

    //   return $data;
    // }
    // public function productdetail($id)
    // {
    //   $data= array();
    //   // $ListCatePro=$this->category_model->getList();
    //   $detail=$this->product_model->getOne_byId($id);
    //   // var_dump($detail);
    //   // $SameCate=$this->product_model->getList_bySameCateId($detail['catp_id']);
    //   // var_dump($SameCate);
    //   $data= array(
    //     'product'=>$detail,    
    //     // 'samecate'=>$SameCate,    
    //   );

    //   return $data;
    // }
    // // // public function khaigiang($id)
    // // // {
    // // //   $data= array();
    // // //   $khaigiang=$this->article_model->getList_byDmaId_Limit($id,$limit=1,$detail=1);
    // // //   // echo "<pre>";
    // // //   // print_r($khaigiang);
    // // //   // echo "</pre>"; 
      
    // // //   $data= array(    
    // // //     'khaigiang'=>$khaigiang,
    // // //   );

    // // //     return $data;
    // // // }
    // // public function khaigiang_danhsach_all()
    // // {
    // //   $data= array();
    // //   $khaigiang=$this->article_model->getList_byCmaId_Limit($Cid=26,$limit=0,$detail=0);
    // //   // echo "<pre>";
    // //   // print_r($khaigiang);
    // //   // echo "</pre>"; 
    // //   $dataSeo= $this->seo_model->getOne_byConstant('SEO_KHAIGIANG_LIST');
    // //   $data= array(    
    // //     'list'=>$khaigiang,
    // //     'seo'=>$dataSeo
    // //   );

    // //     return $data;
    // // }
    // public function baiviet_danhsach($id)
    // {
    //   $data= array();
    //   $cate=$this->danhmuc_model->getOne_byDmaId($id);
    //   $list=$this->article_model->getList_byDmaId_Limit($id,$limit=0,$detail=0);
    //   // echo "<pre>";
    //   // print_r($list);
    //   // print_r($cate);
    //   // echo "</pre>"; 

    //   $dataSeo=array(
    //     'seo_title'=>$cate['dma_title'],
    //     'seo_description'=>$cate['dma_meta_description'],
    //     'seo_keywords'=>$cate['dma_meta_keyword'],
    //     );
    //   $data= array(    
    //     'cate'=>$cate,
    //     'list'=>$list,
    //     'seo'=>$dataSeo
    //   );

    //     return $data;
    // }
    // public function baiviet_chitiet($id)
    // {
    //   $data= array();
    //   // $cate=$this->danhmuc_model->getOne_byDmaId($id);
    //   $detail=$this->article_model->getOne_byAId($id);
    //   // echo "<pre>";
    //   // print_r($detail);
    //   // echo "</pre>"; 
    //   $dataSeo=array(
    //     'seo_title'=>$detail['a_title'],
    //     'seo_description'=>$detail['a_meta_description'],
    //     'seo_keywords'=>$detail['a_meta_keyword'],
    //     );
    //   // $dataSeo= $this->seo_model->getOne_byConstant('SEO_KHAIGIANG_LIST');
    //   $data= array(    
    //     // 'cate'=>$cate,
    //     'detail'=>$detail,
    //     'seo'=>$dataSeo,
    //     'samecate'=> $this->baiviet_danhsach($detail['dma_id'])
    //   );

    //     return $data;
    // }
    // // public function khoahoc_danhsach()
    // // {
    // //   $data= array();
    // //   $list=$this->product_model->getList();
    // //   // echo "<pre>";
    // //   // print_r($list);
    // //   // echo "</pre>"; 
    // //   $dataSeo= $this->seo_model->getOne_byConstant('SEO_KHOAHOC_LIST');

    // //   $data= array(  
    // //     'list'=>$list,
    // //     'seo'=>$dataSeo
    // //   );

    // //     return $data;
    // // }
    // // public function khoahoc_chitiet($id)
    // // {
    // //   $data= array();
    // //   $detail=$this->product_model->getOne_byId($id);
    // //   // echo "<pre>";
    // //   // print_r($detail);
    // //   // echo "</pre>"; 
      
    // //   $dataSeo=array(
    // //     'seo_title'=>$detail['product_name'],
    // //     'seo_description'=>$detail['product_meta_description'],
    // //     'seo_keywords'=>$detail['product_meta_keyword'],
    // //     );
    // //   $data= array(  
    // //     'detail'=>$detail,
    // //     'seo'=>$dataSeo
    // //   );

    // //     return $data;
    // // }
    // // public function chat()
    // // {
    // //   $data= array();
    // //   $dataSeo= $this->seo_model->getOne_byConstant('SEO_CHAT');
    // //   $data= array(  
    // //     'seo'=>$dataSeo
    // //   );

    // //     return $data;
    // // }
    // // public function lienhe()
    // // {
    // //   $data= array();
    // //   $dataSeo= $this->seo_model->getOne_byConstant('SEO_LIENHE');
    // //   $data= array(  
    // //     'seo'=>$dataSeo
    // //   );

    // //     return $data;
    // // }












    // // public function productlist()
    // // {
    // //   $data= array();
    // //   // $ListCatePro=$this->category_model->getList();
    // //   $ListPro=$this->product_model->getList();
      
    // //   $data= array(
    // //     'product'=>array(
    // //       // 'cate'=>$ListCatePro,
    // //       'pro'=>$ListPro,
    // //     ),          
    // //   );

    // //     return $data;
    // // }
    // // public function cate_productlist($cate)
    // // {
    // //   $data= array();
    // //   // $ListCatePro=$this->category_model->getList();
    // //   $ListPro=$this->product_model->getList_sameCate($cate);
      
    // //   $data= array(
    // //     'product'=>array(
    // //       // 'cate'=>$ListCatePro,
    // //       'pro'=>$ListPro,
    // //     ),          
    // //   );

    // //     return $data;
    // // }
    // // public function productdetail($id)
    // // {
    // //   $data= array();
    // //   // $ListCatePro=$this->category_model->getList();
    // //   $detail=$this->product_model->getOne_byId($id);
    // //   // var_dump($detail);
    // //   $SameCate=$this->product_model->getList_bySameCateId($detail['catp_id']);
    // //   // var_dump($SameCate);
    // //   $data= array(
    // //     'pro'=>$detail,    
    // //     'samecate'=>$SameCate,    
    // //   );

    // //     return $data;
    // // }
    // // public function newslist()
    // // {
    // //   $data= array();
    // //   // $ListCatePro=$this->category_model->getList();
    // //   $List=$this->article_model->getList_byDmaId(59);
      
    // //   $data= array(
    // //     'list'=>$List,         
    // //   );

    // //     return $data;
    // // }
    // // public function newsdetail($id)
    // // {
    // //   $data= array();
    // //   // $ListCatePro=$this->category_model->getList();
    // //   $List=$this->article_model->getList_byDmaId(59);
    // //   $detail=$this->article_model->getOne_byAId($id);
      
    // //   $data= array(
    // //     'news'=>$detail,    
    // //     'samecate'=>$List,    
    // //   );

    // //     return $data;
    // // }
    // // public function chinhsachdetail($id)
    // // {
    // //   $data= array();
    // //   // $ListCatePro=$this->category_model->getList();
    // //   $detail=$this->article_model->getOne_byAId($id);
      
    // //   $data= array(
    // //     'news'=>$detail,    
    // //   );

    // //     return $data;
    // // }
    // // public function chinhsachlist()
    // // {
    // //   $data= array();
    // //   // $ListCatePro=$this->category_model->getList();
    // //   $List=$this->article_model->getList_byDmaId(61);
      
    // //   $data= array(
    // //     'list'=>$List,         
    // //   );
    // //   // var_dump($data);
    // //     return $data;
    // // }




    
    // // public function danhmucbaiviet($dmaId)
    // // {
    // //     // $this->load->model('danhmuc/danhmuc_model','danhmuc_model');
    // //     // $this->load->model('article/article_model','article_model');
    // //     $data= array();
       
    // //    $dataDanhmuc=$this->danhmuc_model->getOne_byDmaId($dmaId);
    // //    $dataBaivietlienquan=$this->article_model->getListLimitSortAsc_byDmaId($dmaId,0);
    // //    $dataKhuyenmaiHocbong=$this->article_model->getListLimitSortDesc_byDmaId($dmaId=21,0);

    // //     $data= array(
    // //         'dataDanhmuc'=>$dataDanhmuc,
    // //         'dataBaivietlienquan'=>$dataBaivietlienquan,
    // //         'dataKhuyenmaiHocbong'=>$dataKhuyenmaiHocbong,
    // //         // 'tieudiem'=>$dataTieudiem,
    // //         // 'tintuc'=>$dataTintuc,

    // //     );

    // //     return $data;
    // // }
    // // public function listnews($dmaId)
    // // {
    // //     // $this->load->model('danhmuc/danhmuc_model','danhmuc_model');
    // //     // $this->load->model('article/article_model','article_model');
    // //     $data= array();
       
    // //    $dataDanhmuc=$this->danhmuc_model->getOne_byDmaId($dmaId);
    // //    $dataBaivietlienquan=$this->article_model->getListNewsLimitSortDesc_byDmaId($dmaId=20,0);
    // //    $dataKhuyenmaiHocbong=$this->article_model->getListLimitSortDesc_byDmaId($dmaId=21,0);

    // //     $data= array(
    // //         'dataDanhmuc'=>$dataDanhmuc,
    // //         'dataBaivietlienquan'=>$dataBaivietlienquan,
    // //         'dataKhuyenmaiHocbong'=>$dataKhuyenmaiHocbong,
    // //         // 'tieudiem'=>$dataTieudiem,
    // //         // 'tintuc'=>$dataTintuc,

    // //     );

    // //     return $data;
    // // }
    // // public function detailnews($dmaId)
    // // {
    // //     // $this->load->model('danhmuc/danhmuc_model','danhmuc_model');
    // //     // $this->load->model('article/article_model','article_model');
    // //     $data= array();
       
    // //    $dataDanhmuc=$this->danhmuc_model->getOne_byDmaId($dmaId);
    // //    $dataBaivietchitiet=$this->article_model->getOne_byAId($dmaId);
    // //    $dataBaivietlienquan=$this->article_model->getListNewsLimitSortDesc_byDmaId($dmaId=20,0);
    // //    $dataKhuyenmaiHocbong=$this->article_model->getListLimitSortDesc_byDmaId($dmaId=21,0);

    // //     $data= array(
    // //         'dataDanhmuc'=>$dataDanhmuc,
    // //         'dataBaivietchitiet'=>$dataBaivietchitiet,
    // //         'dataBaivietlienquan'=>$dataBaivietlienquan,
    // //         'dataKhuyenmaiHocbong'=>$dataKhuyenmaiHocbong,
    // //         // 'tieudiem'=>$dataTieudiem,
    // //         // 'tintuc'=>$dataTintuc,

    // //     );

    // //     return $data;
    // // }
    // // public function listchuabenh($dmaId)
    // // {
    // //     // $this->load->model('danhmuc/danhmuc_model','danhmuc_model');
    // //     // $this->load->model('article/article_model','article_model');
    // //     $data= array();
       
    // //    $dataDanhmuc=$this->danhmuc_model->getOne_byDmaId($dmaId);
    // //    $dataBaivietlienquan=$this->article_model->getListNewsLimitSortDesc_byDmaId($dmaId=57,0);
    // //    $dataKhuyenmaiHocbong=$this->article_model->getListLimitSortDesc_byDmaId($dmaId=21,0);

    // //     $data= array(
    // //         'dataDanhmuc'=>$dataDanhmuc,
    // //         'dataBaivietlienquan'=>$dataBaivietlienquan,
    // //         'dataKhuyenmaiHocbong'=>$dataKhuyenmaiHocbong,
    // //         // 'tieudiem'=>$dataTieudiem,
    // //         // 'tintuc'=>$dataTintuc,

    // //     );

    // //     return $data;
    // // }
    // // public function detailchuabenh($dmaId)
    // // {
    // //     // $this->load->model('danhmuc/danhmuc_model','danhmuc_model');
    // //     // $this->load->model('article/article_model','article_model');
    // //     $data= array();
       
    // //    $dataDanhmuc=$this->danhmuc_model->getOne_byDmaId($dmaId);
    // //    $dataBaivietchitiet=$this->article_model->getOne_byAId($dmaId);
    // //    $dataBaivietlienquan=$this->article_model->getListNewsLimitSortDesc_byDmaId($dmaId=57,0);
    // //    $dataKhuyenmaiHocbong=$this->article_model->getListLimitSortDesc_byDmaId($dmaId=21,0);

    // //     $data= array(
    // //         'dataDanhmuc'=>$dataDanhmuc,
    // //         'dataBaivietchitiet'=>$dataBaivietchitiet,
    // //         'dataBaivietlienquan'=>$dataBaivietlienquan,
    // //         'dataKhuyenmaiHocbong'=>$dataKhuyenmaiHocbong,

    // //     );
    // //     // var_dump($data['dataBaivietlienquan']);
    // //     return $data;
    // // }
    // // public function listphimonline($dmaId)
    // // {
    // //     // $this->load->model('danhmuc/danhmuc_model','danhmuc_model');
    // //     // $this->load->model('article/article_model','article_model');
    // //     $data= array();
       
    // //    $dataDanhmuc=$this->danhmuc_model->getOne_byDmaId($dmaId);
    // //    $dataBaivietlienquan=$this->article_model->getListNewsLimitSortDesc_byDmaId($dmaId=58,0);
    // //    $dataKhuyenmaiHocbong=$this->article_model->getListLimitSortDesc_byDmaId($dmaId=21,0);

    // //     $data= array(
    // //         'dataDanhmuc'=>$dataDanhmuc,
    // //         'dataBaivietlienquan'=>$dataBaivietlienquan,
    // //         'dataKhuyenmaiHocbong'=>$dataKhuyenmaiHocbong,
    // //         // 'tieudiem'=>$dataTieudiem,
    // //         // 'tintuc'=>$dataTintuc,

    // //     );

    // //     return $data;
    // // }
    // // public function detailphimonline($dmaId)
    // // {
    // //     // $this->load->model('danhmuc/danhmuc_model','danhmuc_model');
    // //     // $this->load->model('article/article_model','article_model');
    // //     $data= array();
       
    // //    $dataDanhmuc=$this->danhmuc_model->getOne_byDmaId($dmaId);
    // //    $dataBaivietchitiet=$this->article_model->getOne_byAId($dmaId);
    // //    $dataBaivietlienquan=$this->article_model->getListNewsLimitSortDesc_byDmaId($dmaId=58,0);
    // //    $dataKhuyenmaiHocbong=$this->article_model->getListLimitSortDesc_byDmaId($dmaId=21,0);

    // //     $data= array(
    // //         'dataDanhmuc'=>$dataDanhmuc,
    // //         'dataBaivietchitiet'=>$dataBaivietchitiet,
    // //         'dataBaivietlienquan'=>$dataBaivietlienquan,
    // //         'dataKhuyenmaiHocbong'=>$dataKhuyenmaiHocbong,

    // //     );
    // //     // var_dump($data['dataBaivietlienquan']);
    // //     return $data;
    // // }
    // // public function home()
    // // {

    // //     $this->load->model(array(
    // //         'sp/sp_category',
    // //         'sp/sp_detail',
    // //         )
    // //     );

    // //     $data= array();
       
    // //    $listCateLv1=$this->sp_category->getProductCategories();
    // //    $data=$this->__sortcate($listCateLv1);
    // //    $cate=array();
    // //    foreach ($data as $key1 => $catelv1) {
    // //        // echo $catelv1['product_category_id'].':';
    // //        $cate[]=array(
    // //             'id'=>$catelv1['product_category_id'],
    // //             'name'=>$catelv1['product_category_title'],
    // //             'slug'=>$catelv1['product_category_slug'],
    // //             );
    // //         $cate[$key1]['subcate'][]=$catelv1['product_category_id'];
    // //         if (!empty($catelv1['children'])) {
    // //             // echo "have children";
    // //             foreach ($catelv1['children'] as $key2 => $catelv2) {
    // //                 // $count+=1;
    // //                 $cate[$key1]['subcate'][]=$catelv2['product_category_id'];

                    
    // //             }
    // //             $datacates=$this->sp_detail->gets_ProductInLv1_ByIdArray_home($cate[$key1]['subcate'],4);
    // //             $cate[$key1]['productsIn']=$datacates;
    // //            // echo "<pre>";
    // //            //  print_r($datacates);
    // //            //  echo "</pre>";
    // //         }            
    // //         // echo "<br>";

    // //         // echo "<pre>";
    // //         // print_r($cate);
    // //         // echo "</pre>";
    // //    }
    // //     $data= array(
    // //         'listCate'=>$cate,

    // //     );

    // //     return $data;
    // // }
    // // public function project_list()
    // // {

    // //     $this->load->model(array(
    // //         'blog/blog_detail',
    // //         )
    // //     );

    // //     $data= array();
       
    // //    // $thiscate=$this->sp_category->get_CategoryById($catid);
    // //    $listProject=$this->blog_detail->getsProject();
    // //    // $data=$this->__sortcate($listCateLv1);
    // //    // $cate=$listProSameCate;
    // //     $data= array(
    // //         // 'thisCate'=>$thiscate,
    // //         'listProject'=>$listProject,

    // //     );
    // //     // echo "models/frontend.php<pre>";
    // //     //     print_r($listNews);
    // //     //     echo "</pre>";
    // //     return $data;
    // // }
    // // public function news_list()
    // // {

    // //     $this->load->model(array(
    // //         'blog/blog_detail',
    // //         )
    // //     );

    // //     $data= array();
    // //    $listNews=$this->blog_detail->getsNews();
    // //     $data= array(
    // //         // 'thisCate'=>$thiscate,
    // //         'listNews'=>$listNews,

    // //     );
    // //     // echo "models/frontend.php<pre>";
    // //         // var_dump($listNews);
    // //     return $data;
    // // }
    // // public function news_detail($id)
    // // {

    // //     $this->load->model(array(
    // //         'blog/blog_detail',
    // //         )
    // //     );

    // //     $data= array();
       
    // //    // $thiscate=$this->sp_category->get_CategoryById($catid);
    // //    $detailNews=$this->blog_detail->getNewsById($id);
    // //    $lastNews=$this->blog_detail->getsNewsLastest_Home();
    // //    // $data=$this->__sortcate($listCateLv1);
    // //    // $cate=$listProSameCate;
    // //     $data= array(
    // //         // 'thisCate'=>$thiscate,
    // //         'detailNews'=>$detailNews,
    // //         'lastNews'=>$lastNews,

    // //     );
    // //     // echo "models/frontend.php<pre>";
    // //     //     print_r($listNews);
    // //     //     echo "</pre>";
    // //     return $data;
    // // }
    // // public function khuyenmai_list()
    // // {

    // //     $this->load->model(array(
    // //         'blog/blog_detail',
    // //         )
    // //     );

    // //     $data= array();
    // //    $listdata=$this->blog_detail->getsKhuyenmai();
    // //     $data= array(
    // //         // 'thisCate'=>$thiscate,
    // //         'listdata'=>$listdata,

    // //     );
    // //     // echo "models/frontend.php<pre>";
    // //         // var_dump($listdata);
    // //     return $data;
    // // }
    // // public function khuyenmai_detail($id)
    // // {

    // //     $this->load->model(array(
    // //         'blog/blog_detail',
    // //         )
    // //     );

    // //     $data= array();
    // //     $detaildata=$this->blog_detail->getKhuyenmaiById($id);
    // //     $SameCate=$this->blog_detail->getKhuyenmaiSameCate();
    // //     $data= array(
    // //         'SameCate'=>$SameCate,
    // //         'detaildata'=>$detaildata,

    // //     );
    // //     // echo "models/frontend.php<pre>";
    // //         // var_dump($listdata);
    // //     return $data;
    // // }
    // // public function baogia_list()
    // // {

    // //     $this->load->model(array(
    // //         'blog/blog_detail',
    // //         )
    // //     );

    // //     $data= array();
    // //    $listdata=$this->blog_detail->getsBaogia();
    // //     $data= array(
    // //         // 'thisCate'=>$thiscate,
    // //         'listdata'=>$listdata,

    // //     );
    // //     // echo "models/frontend.php<pre>";
    // //         // var_dump($listdata);
    // //     return $data;
    // // }
    // // public function baogia_detail($id)
    // // {

    // //     $this->load->model(array(
    // //         'blog/blog_detail',
    // //         )
    // //     );

    // //     $data= array();
    // //     $detaildata=$this->blog_detail->getBaogiaById($id);
    // //     $SameCate=$this->blog_detail->getBaogiaSameCate();
    // //     $data= array(
    // //         'SameCate'=>$SameCate,
    // //         'detaildata'=>$detaildata,

    // //     );
    // //     // echo "models/frontend.php<pre>";
    // //         // var_dump($listdata);
    // //     return $data;
    // // }
    // // public function project_detail($id)
    // // {

    // //     $this->load->model(array(
    // //         'blog/blog_detail',
    // //         )
    // //     );

    // //     $data= array();
       
    // //    // $thiscate=$this->sp_category->get_CategoryById($catid);
    // //    $detailProject=$this->blog_detail->getProjectById($id);
    // //    $lastProject=$this->blog_detail->getsProjectsLastest_Home();
    // //    // $data=$this->__sortcate($listCateLv1);
    // //    // $cate=$listProSameCate;
    // //     $data= array(
    // //         // 'thisCate'=>$thiscate,
    // //         'detailProject'=>$detailProject,
    // //         'lastProject'=>$lastProject,

    // //     );
    // //     // echo "models/frontend.php<pre>";
    // //     //     print_r($listNews);
    // //     //     echo "</pre>";
    // //     return $data;
    // // }
    // // public function mnusanpham()
    // // {

    // //     $this->load->model(array(
    // //         'sp/sp_category',
    // //         'sp/sp_detail',
    // //         )
    // //     );

    // //     $data= array();
       
    // //    // $thisdata=$this->sp_category->get_CategoryById($catid);
    // //    $listdata=$this->sp_detail->getsProduct_MnutopSanpham();
    // //    // $data=$this->__sortcate($listCateLv1);
    // //    // $cate=$listProSameCate;
    // //     $data= array(
    // //         'listdata'=>$listdata,

    // //     );
    // //     // echo "models/frontend.php";
    // //     //     var_dump($listdata);
    // //     return $data;
    // // }
    // // public function category($catid='')
    // // {

    // //     $this->load->model(array(
    // //         'sp/sp_category',
    // //         'sp/sp_detail',
    // //         )
    // //     );

    // //     $data= array();
       
    // //    $thiscate=$this->sp_category->get_CategoryById($catid);
    // //    $listProSameCate=$this->sp_detail->getsProductSameCateById($catid);
    // //    // $data=$this->__sortcate($listCateLv1);
    // //    $cate=$listProSameCate;
    // //     $data= array(
    // //         'thisCate'=>$thiscate,
    // //         'listCate'=>$cate,

    // //     );
    // //     // echo "models/frontend.php<pre>";
    // //     //     print_r($cate);
    // //     //     echo "</pre>";
    // //     return $data;
    // // }
    // // public function product($id='')
    // // {

    // //     $this->load->model(array(
    // //         // 'sp/sp_category',
    // //         'sp/sp_detail',
    // //         )
    // //     );
    // //     $pro=$this->sp_detail->getProductById($id);
    // //     $catepros=$this->sp_detail->getsProductSameCateById($pro['catlv2_id']);
    // //     $data= array(
    // //         'product'=>$pro,
    // //         'productSameCate'=>$catepros,

    // //     );

    // //     return $data;
    // // }
    // // public function sortListTest($items)
    // // {

    // //     // create an array to hold the references
    // //    $refs = array();

    // //    // create and array to hold the list
    // //    $list = array();

    // //    // loop over the results
    // //    //while($data = @mysql_fetch_assoc($result))
    // //     foreach($items as $data)
    // //     {
    // //        // Assign by reference
    // //        $thisref = &$refs[ $data['catlv2_id'] ];

    // //        // add the the menu parent
    // //        $thisref['product_category_id'] = $data['catlv2_id'];
    // //        $thisref['product_category_title'] = $data['catlv2_title'];
    // //        // $thisref['product_category_tree'] = $data['tree'];
    // //        // $thisref['product_category_order'] = $data['catlv2_order'];

    // //        // if there is no parent id
    // //        if (($data['parent_id'])==0)
    // //        {
    // //            $list[ $data['catlv2_id'] ] = &$thisref;
    // //        }
    // //        else
    // //        {
    // //            // $refs[ $data['catlv2_id'] ]['children'][ $data['catlv2_id'] ] = &$thisref;
    // //            $refs[ $data['parent_id'] ]['children'][ $data['catlv2_id'] ] = &$thisref;
    // //        }
    // //    }
    // //    // echo "list";
    // //    // print_r($list);
    // //    // return $this->create_list_html($list);
    // //    return $this->html_data($list);
    // // }
    // // private function html_data($arr)
    // //             {
    // //                // echo "create_list_html:<br>";
    // //                //  echo "<pre>";
    // //                // print_r($arr);
    // //                // echo "</pre>";
    // //                 $html = "\n<ul>\n";
    // //                 // $html = "";
    // //                 foreach ($arr as $key=>$v) 
    // //                 {
    // //                     $html .= '<li>'.$v['product_category_title']."</li>\n";
    // //                     // $html .= $v['product_category_title'].'<br>';

    // //                     // echo $html;
    // //                     // if (array_key_exists('tree', $v))
    // //                    //  echo "<pre>";
    // //                    // print_r($v);
    // //                    // echo "</pre>";
    // //                     if (!empty($v['children']))
    // //                     {
    // //                         // echo "có children";
    // //                         $html .= "<li>";
    // //                         $html .= $this->html_data($v['children']);
    // //                         // $html .= create_list($v['children']);
    // //                         $html .= "</li>\n";
    // //                     }
    // //                     else{}
    // //                 }
    // //                 $html .= "</ul>\n";
    // //                 // echo $html;
    // //                 return $html;
    // //             } 














    // // public function sortListCatgoryTable($items)
    // // {

    // //     // create an array to hold the references
    // //    $refs = array();

    // //    // create and array to hold the list
    // //    $list = array();

    // //    // loop over the results
    // //    //while($data = @mysql_fetch_assoc($result))
    // //     foreach($items as $data)
    // //     {
    // //        // Assign by reference
    // //        $thisref = &$refs[ $data['catlv2_id'] ];

    // //        // add the the menu parent
    // //        $thisref['product_category_id'] = $data['catlv2_id'];
    // //        $thisref['product_category_title'] = $data['catlv2_title'];
    // //        $thisref['product_category_tree'] = $data['tree'];
    // //        $thisref['product_category_order'] = $data['catlv2_order'];

    // //        // if there is no parent id
    // //        if (($data['parent_id'])==0)
    // //        {
    // //            $list[ $data['catlv2_id'] ] = &$thisref;
    // //        }
    // //        else
    // //        {
    // //            // $refs[ $data['catlv2_id'] ]['children'][ $data['catlv2_id'] ] = &$thisref;
    // //            $refs[ $data['parent_id'] ]['children'][ $data['catlv2_id'] ] = &$thisref;
    // //        }
    // //    }
    // //    // echo "list";
    // //    // print_r($list);
    // //    // return $this->create_list_html($list);
    // //    return $this->create_list_html($list);
    // // }
    // //             private function sortDropdownCategory($items)
    // //             {

    // //                 // create an array to hold the references
    // //                $refs = array();

    // //                // create and array to hold the list
    // //                $list = array();

    // //                // loop over the results
    // //                //while($data = @mysql_fetch_assoc($result))
    // //                 foreach($items as $data)
    // //                 {
    // //                    // Assign by reference
    // //                    $thisref = &$refs[ $data['catlv2_id'] ];

    // //                    // add the the menu parent
    // //                    $thisref['product_category_id'] = $data['catlv2_id'];
    // //                    $thisref['product_category_title'] = $data['catlv2_title'];
    // //                    $thisref['product_category_tree'] = $data['tree'];

    // //                    // if there is no parent id
    // //                    if (($data['parent_id'])==0)
    // //                    {
    // //                        $list[ $data['catlv2_id'] ] = &$thisref;
    // //                    }
    // //                    else
    // //                    {
    // //                        // $refs[ $data['catlv2_id'] ]['children'][ $data['catlv2_id'] ] = &$thisref;
    // //                        $refs[ $data['parent_id'] ]['children'][ $data['catlv2_id'] ] = &$thisref;
    // //                    }
    // //                }
    // //                // echo "list";
    // //                // print_r($list);
    // //                return $this->create_list_select($list);
    // //             }

    // //         /**
    // //         *
    // //         * Create a HTML list from an array
    // //         *
    // //         * @param    array    $arr
    // //         * @param    string    $list_type
    // //         * @return    string
    // //         *
    // //         */
    // //             private function create_list_html($arr)
    // //             {
    // //                // echo "create_list_html:<br>";
    // //                //  echo "<pre>";
    // //                // print_r($arr);
    // //                // echo "</pre>";
    // //                 $html = "\n<ul>\n";
    // //                 // $html = "";
    // //                 foreach ($arr as $key=>$v) 
    // //                 {
    // //                     // $html .= '<li>'.$v['product_category_tree'].$v['product_category_title']."</li>\n";
    // //                     $html .= $v['product_category_tree'].$v['product_category_title'].'<br>';

    // //                     // echo $html;
    // //                     // if (array_key_exists('tree', $v))
    // //                    //  echo "<pre>";
    // //                    // print_r($v);
    // //                    // echo "</pre>";
    // //                     if (!empty($v['children']))
    // //                     {
    // //                         // echo "có children";
    // //                         $html .= "<li>";
    // //                         $html .= $this->create_list_html($v['children']);
    // //                         // $html .= create_list($v['children']);
    // //                         $html .= "</li>\n";
    // //                     }
    // //                     else{}
    // //                 }
    // //                 // $html .= "</ul>\n";
    // //                 // echo $html;
    // //                 return $html;
    // //             } 
    
    // // public function searchsp($pro)
    // // {
    // //     $this->load->model(array('sp/sp_detail'));

    // //     $data= array();    
    // //     $listPro=$this->sp_detail->gets_SearchPro($pro);

    // //     $data= array(
    // //         'listPro'=>$listPro,
    // //     );

    // //     return $data;
    // // }
    // // public function gioithieu($id)
    // // {

    // //     $this->load->model(array(
    // //         'info/detail',
    // //         )
    // //     );

    // //     $data= array();
       
    // //    $info=$this->detail->getInfoById($id);
       
    // //     $data= array(
            
    // //         'info'=>$info,

    // //     );

    // //     return $data;
    // // }
    // // public function myfile($catid)//bảng giá, categolue
    // // {

    // //     $this->load->model(array(
    // //         'file/listfile',
    // //         )
    // //     );

    // //     $data= array();
       
    // //    $files=$this->listfile->getsFileByCateId($catid);
       
    // //     $data= array(
            
    // //         'files'=>$files,

    // //     );

    // //     return $data;
    // // }
    // // public function gioithieu($id='73')
    // // {
    // //     $this->load->model(array('gioithieu/gioithieu_detail'));

    // //     $data= array();
       
    // //     $gioithieu=$this->gioithieu_detail->get_info_detail_by_id($id);

    // //     // $titleblog=$this->blog_cate->get_blog_catename_by_id($id);
    // //     // print_r($gioithieu);
    // //     $data= array(

    // //         'title'=>$gioithieu['title'],
    // //         'content'=>$gioithieu['content'],
    // //         'slug'=>$gioithieu['slug'],
    // //     );

    // //     return $data;
    // // }

    // // public function lienhe($id='74')
    // // {
    // //     $this->load->model(array('lienhe/lienhe_detail'));

    // //     $data= array();
       
    // //     $lienhe=$this->lienhe_detail->get_info_detail_by_id($id);

    // //     // $titleblog=$this->blog_cate->get_blog_catename_by_id($id);
    // //     // print_r($gioithieu);
    // //     $data= array(

    // //         'title'=>$lienhe['title'],
    // //         'content'=>$lienhe['content'],
    // //         'slug'=>$lienhe['slug'],
    // //     );

    // //     return $data;
    // // }


    // // public function tintucs()
    // // {
    // //     $this->load->model(array('tintuc/tintuc_list'));

    // //     $data= array();
       
    // //     $list=$this->tintuc_list->gets_list_desc();

    // //     // $titleblog=$this->blog_cate->get_blog_catename_by_id($id);
    // //     // print_r($gioithieu);
    // //     $data= array(

    // //         'list'=>$list
    // //     );

    // //     return $data;
    // // }
    // // public function tintuc($id)
    // // {
    // //     $this->load->model(array('tintuc/tintuc_detail'));

    // //     $data= array();
       
    // //     $detail=$this->tintuc_detail->get_detail_by_id($id);

    // //     // $titleblog=$this->blog_cate->get_blog_catename_by_id($id);
    // //     // print_r($gioithieu);
    // //     $data= array(

    // //         'detail'=>$detail
    // //     );

    // //     return $data;
    // // }
    // // public function camdos()
    // // {
    // //     $this->load->model(array('camdo/camdo_list'));

    // //     $data= array();
       
    // //     $list=$this->camdo_list->gets_list();

    // //     // $titleblog=$this->blog_cate->get_blog_catename_by_id($id);
    // //     // print_r($gioithieu);
    // //     $data= array(

    // //         'list'=>$list
    // //     );

    // //     return $data;
    // // }

    // // public function camdo($id)
    // // {
    // //     $this->load->model(array('camdo/camdo_detail'));

    // //     $data= array();
       
    // //     $detail=$this->camdo_detail->get_detail_by_id($id);

    // //     // $titleblog=$this->blog_cate->get_blog_catename_by_id($id);
    // //     // print_r($gioithieu);
    // //     $data= array(

    // //         'detail'=>$detail
    // //     );

    // //     return $data;
    // // }

    // // public function muabans($idcat)
    // // {
    // //     $this->load->model(array('muaban/muaban_list'));

    // //     $data= array();
       
    // //     $list=$this->muaban_list->gets_list_by_idcat($idcat);

    // //     // $titleblog=$this->blog_cate->get_blog_catename_by_id($id);
    // //     // print_r($gioithieu);
    // //     $data= array(

    // //         'list'=>$list
    // //     );

    // //     return $data;
    // // }

    // // public function muaban($id)
    // // {
    // //     $this->load->model(array('muaban/muaban_detail'));

    // //     $data= array();
       
    // //     $detail=$this->muaban_detail->get_product_by_id($id);

    // //     // $titleblog=$this->blog_cate->get_blog_catename_by_id($id);
    // //     // print_r($gioithieu);
    // //     $data= array(

    // //         'detail'=>$detail
    // //     );

    // //     return $data;
    // // }
    // // public function blog_detail($id)
    // // {
    // //     $this->load->model(array(
    // //         'blog/blog_detail',
    // //         'blog/blog_cate'
    // //         )
    // //     );

    // //     $data= array();
       
    // //     $detailblog=$this->blog_detail->get_blog_detail_by_id($id);
    // //     $listbloglienquan=$this->blog_cate->gets_list_blog_lienquan($detailblog['cat_lv2_id'],$detailblog['blog_id']);

    // //     $data= array(

    // //         'detailblog'=>$detailblog,
    // //         'lienquanblog'=>$listbloglienquan,
    // //     );

    // //     return $data;
    // // }


    // // public function servicelist($id)
    // // {
    // //     $this->load->model(array('service/service_cate'));

    // //     $data= array();
       
    // //     $listservice=$this->service_cate->gets_list_serv_by_parentid($id);
    // //     $titleservice=$this->service_cate->get_serv_catename_by_id($id);

    // //     $data= array(

    // //         'titleservice'=>$titleservice,
    // //         'listservice'=>$listservice,
    // //     );

    // //     return $data;
    // // }
    // // public function service_detail($id)
    // // {
    // //     $this->load->model(array(
    // //         'service/service_cate',
    // //         'service/service_detail'
    // //         )
    // //     );

    // //     $data= array();
    // //     //menu sản phẩm
       
    // //     $detailser=$this->service_detail->get_service_detail_by_id($id);
    // //     $listserlienquan=$this->service_cate->gets_list_service_lienquan($detailser['service_cat_id'],$detailser['service_id']);
    // //     // var_dump($detailblog);

    // //     $data= array(

    // //         'detailser'=>$detailser,
    // //         'listserlienquan'=>$listserlienquan,
    // //     );

    // //     return $data;
    // // }
    // // public function save_order($dataorder)
    // // {
    // //     $this->load->model(array(
    // //         'order/order',
    // //         )
    // //     );
    // //     $this->order->save($dataorder);
        
    // // }
    // // public function save_feedback($datafb)
    // // {
    // //     $this->load->model(array(
    // //         'feedback/feedback',
    // //         )
    // //     );

    // //     $this->feedback->save($datafb);
    // // }
    // // public function list_feedback()
    // // {
    // //     $this->load->model(array(
    // //         'feedback/feedback',
    // //         )
    // //     );

    // //     $data= array();
       
    // //     $listfeedback=$this->feedback->gets_feedback();

    // //     $data= array(

    // //         'listFeed'=>$listfeedback,
    // //     );

    // //     return $data;

    // // }
    // // public function save_contact($datacontact)
    // // {
    // //     $this->load->model(array(
    // //         'contact/contact',
    // //         )
    // //     );       
    // //     $this->contact->save($datacontact);       
    // // }












    // // public function sp($id)
    // // {
    // //     $this->load->model(array('sanpham'));

    // //     $data= array();
              
    // //     $DetailSP=$this->sanpham->get_SP_byId($id);
    // //     $OtherSP=$this->sanpham->sanpham_cungloai($id,$DetailSP['id']);
    // //     $data= array(
    // //         'pro'=>$DetailSP,
    // //         'otherpros'=>$OtherSP,
    // //     );

    // //     return $data;
    // // }
    // // public function search($key)
    // // {
    // //     $this->load->model(array('sanpham'));

    // //     $data= array();
              
    // //     $SearchSP=$this->sanpham->search_products($key);
    // //     $data= array(
    // //         'pros'=>$SearchSP,
    // //     );

    // //     return $data;
    // // }
    // // public function gioithieu($id)
    // // {
    // //     $this->load->model(array('thongtin'));

    // //     $data= array();
              
    // //     $DetailInfo=$this->thongtin->getsThongtinById($id);
    // //     // $OtherSP=$this->sanpham->sanpham_cungloai($id,$DetailSP['category']);
    // //     $data= array(
    // //         'info'=>$DetailInfo,
    // //     );

    // //     return $data;
    // // }
    // // public function tintuclist()
    // // {
    // //     $this->load->model(array('tintuc'));

    // //     $data= array();
              
    // //     $ListNews=$this->tintuc->gets_tintuc();
    // //     // $OtherSP=$this->sanpham->sanpham_cungloai($id,$DetailSP['category']);
    // //     $data= array(
    // //         'list'=>$ListNews,
    // //     );

    // //     return $data;
    // // }
    // // public function tintuc($id)
    // // {
    // //     $this->load->model(array('tintuc'));

    // //     $data= array();
              
    // //     $News=$this->tintuc->gets_tintuc_byId($id);
    // //     // $OtherSP=$this->sanpham->sanpham_cungloai($id,$DetailSP['category']);
    // //     $data= array(
    // //         'set'=>$News,
    // //     );

    // //     return $data;
    // // }

}
?>