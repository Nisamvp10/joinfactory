<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ServiceModel;
use App\Models\CategoryModel;
class ServiceController extends Controller {
    protected $categoryModel;
    protected $serviceModel;

    function __construct(){
        $this->serviceModel = new ServiceModel();
        $this->categoryModel =  new CategoryModel();
    }

    public function index() {
        $page = "Services";
        $categories = $this->categoryModel->where('is_active' ,1)->get()->getResultArray();
        $services = $this->serviceModel->where('status' ,1)->get()->getResult();;
        return view('frontend/service',compact('services','page','categories'));
    }

    public function details($slug=false) {
        $page = "Services";
            $serviceItems = [
            'title'        => '',
            'short_note'   => '',
            'description'  => '',
            'image'        => '',
            'pointtitle'   => '',
            'varianttitle' => '',
            'icon'         => '',
            'points'       => [],
            'cards'        => [],
            'gallery'      => [],
        ];
        $routeView ='';
        $servicesData = [];
        $titleBar = [];

        $category = $this->categoryModel->select('id')->where('slug', $slug)->get()->getRow();

        if ($category) {
            $services = $this->serviceModel->where('category_id', $category->id)->get()->getResult();
            if (!empty($services) && !empty($services[0]->sub_category)) {
                $items = $this->serviceModel->getMysubcategoryItems($category->id);
                $servicesData = [];

                foreach ($items as $service) {
                    $subCateId = $service->sub_category;
                    // Create subcategory node once
                    if (!isset($servicesData[$subCateId])) {
                            $servicesData[$subCateId] = [
                                'sub_category_id'       => $subCateId,
                                'sub_category_title'    => $service->sub_category_title,
                                'category_description'  => $service->category_description,
                                'category_image'        => $service->category_image,
                                'category_slug'         => $service->category_slug
                            ];
                    }
                    // Push services under subcategory
                    $servicesData[$subCateId]['items'][] = [
                        'slug'  => $service->slug,
                        'title' => $service->title,
                        'note'  => $service->short_note,
                        'image' => $service->image,
                        'category_slug' => $service->category_slug
                    ];
                }
                $routeView = 'frontend/services';
            } else {
                $services = $this->serviceModel->where('slug', $slug)->get()->getRow();
                if(!empty($services)) {
                    $getSericeDetails = $this->serviceModel->serviceDetails2($services->id);
                    $page = $getSericeDetails[0]->title;
                   // echo $this->serviceModel->getLastQuery(); exit();
                    if(!empty($getSericeDetails)){
                        foreach ($getSericeDetails as $serviseitems) {
                            $variantId = $serviseitems->varintId;
                            $serviceId = $serviseitems->id;

                            if(!isset($titleBar[$variantId])) {
                                $titleBar[$variantId] = [
                                    'serviceTitle' => $serviseitems->varinttitle,
                                ];
                            }
                            if (!isset($servicesData[$serviceId])) {
                                    $servicesData[$serviceId] = [
                                        'mainTitle' => $serviseitems->title,
                                        'serviceId' => $serviceId,
                                        'variants' => []
                                    ];
                                }
                            if (!isset($servicesData[$serviceId]['variants'][$variantId])) {
                                    $servicesData[$serviceId]['variants'][$variantId] = [
                                    'serviceTitle' => $serviseitems->varinttitle,
                                    'description'  => $serviseitems->variantdesc,
                                    'banner' => $serviseitems->image,
                                    'subImages' => []
                                
                                ];
                            }
                           if (!empty($serviseitems->subImg)) {
                                $servicesData[$serviceId]['variants'][$variantId]['subImages'][] = [
                                    'image' => $serviseitems->subImg,
                                ];
                            }
                        }
                    }
                }
              
                $routeView = 'frontend/service-inner';
            }
        }else{
       
        }
        $services = array_values($servicesData);
        $titleBar = array_values($titleBar);
        return view($routeView,compact('services','page','titleBar'));

    }

    function singleDetails($slug) {
        $page = "Services";
        $subTitle = '';
        $servicesData = [];
        $titleBar = [];
        //first select category name and parent_id = 7 name knee also select 

        $builder = $this->categoryModel->builder('categories s');

        $category = $builder
            ->select('s.id, s.category, s.parent_id,pc.category as maincategory,pc.slug')
            ->join('categories pc', 'pc.id = s.parent_id', 'left')
            ->where('s.slug', $slug)->get()->getRow();
        $services = $this->serviceModel->where('sub_category', $category->id)->get()->getResult();
        $getSericeDetails = $this->serviceModel->serviceDetails($category->id);
        if (!empty($getSericeDetails)) {

                $page = $category->category;// $getSericeDetails[0]->title;
                $subTitle = '<a href="'.base_url().'services/'.$category->slug.'">'.$category->maincategory.'</a> > '.$category->category;

                foreach ($getSericeDetails as $serviseitems) {

                    $variantId = $serviseitems->varintId;
                    $serviceId = $serviseitems->id;

                    if (!isset($titleBar[$serviceId])) {
                        $titleBar[$serviceId] = [
                            'serviceTitle' => $serviseitems->title,
                        ];
                    }

                    if (!isset($servicesData[$serviceId])) {
                        $servicesData[$serviceId] = [
                            'mainTitle' => $serviseitems->title,
                            'serviceId' => $serviceId,
                            'variants' => []
                        ];
                    }

                    if (!isset($servicesData[$serviceId]['variants'][$variantId])) {
                        $servicesData[$serviceId]['variants'][$variantId] = [
                            'serviceId' => $serviceId,
                            'serviceTitle' => $serviseitems->varinttitle,
                            'description' => $serviseitems->variantdesc,
                            'banner' => $serviseitems->image,
                            'subImages' => [],
                        ];
                    }

                    if (!empty($serviseitems->subImg)) {
                        $servicesData[$serviceId]['variants'][$variantId]['subImages'][] = [
                            'image' => $serviseitems->subImg,
                        ];
                    }
                }
            }

      
        $routeView = 'frontend/service-inner';
        $services = array_values($servicesData);
        $titleBar = array_values($titleBar);
       
        return view($routeView,compact('services','page','titleBar','subTitle'));
    }
}