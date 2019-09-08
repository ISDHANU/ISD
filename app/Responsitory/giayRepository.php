<?php
namespace App\Repository;
use App\Models\giay;
class giayRepository implements RepositoryInterface
{
	// model property on class instances
	protected $model;

	// Constructor to bind model to repo
	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	// Get all instances of model
	public function getAll()
	{
		return $this->model->all();
	}

	// create a new record in the database
	public function create(array $data)
	{
		return $this->model->create($data);
	}

	// update record in the database
	public function update(array $data, $id)
	{
		$record = $this->find($id);
		return $record->update($data);
	}

	// remove record from the database
	public function delete($id)
	{
		return $this->model->destroy($id);
	}

	// show the record with the given id
	public function find($id)
	{
		return $this->model->findOrFail($id);
	}

	// Get the associated model
	public function getModel()
	{
		return $this->model;
	}

	// Set the associated model
	public function setModel($model)
	{
		$this->model = $model;
		return $this;
	}

	// Eager load database relationships
	public function with($relations)
	{
		return $this->model->with($relations);
	}

    public function getKeyUserShop(){
        if(Auth::user()->role_id != Consts::ADMIN)
            $data = DB::table("user_shops")->select('shops.id', 'shops.shopname')->Leftjoin('shops', 'user_shops.shop_id', 'shops.id')->where('user_id', Auth::user()->id)->get();
        else
            $data = DB::table("user_shops")->select('shops.id', 'shops.shopname')->Leftjoin('shops', 'user_shops.shop_id', 'shops.id')->get();
        $result = [];
        if(!empty($data)){
            foreach ($data as $item) {
                if(!empty($item->id) || $item->id != null){
                    $result[$item->id] = $item->id;
                }
            }
        }
        return implode(',',$result);
    }
	public function ReturnAllShop(){
		return DB::select ("SELECT shopname FROM shops");
	}

	public function getHomeCustomers ($userShop){
	    $shops = [];
	    foreach ($userShop as $key => $item){
	        $shops[] = $key;
        }
        $ids = implode(',', $shops);

        $query = DB::select ("SELECT SUM(total.customerLoyal) as loyal, SUM(total.customerUnknow) as unknown
            FROM (
                SELECT (CASE WHEN is_registered = 1 THEN 1 ELSE 0 END) as customerLoyal,
                       (CASE WHEN is_registered IS NULL THEN 1 ELSE 0 END) as customerUnknow
                FROM `customer_visits` WHERE shop_id IN ($ids) GROUP BY name
            ) as total
        ");

        return (object) $query[0];
    }
 	public function getHomeAge ($userShop){
        $shops = [];
        foreach ($userShop as $key => $item){
            $shops[] = $key;
        }
        $ids = implode(',', $shops);

        $query = DB::select ("SELECT SUM(total.a11) as age11, SUM(total.a18) as age18, SUM(total.a30) as age30, SUM(total.a50) as age50, SUM(total.a50plus) as age50plus
            FROM (
                SELECT (CASE WHEN age < 11 THEN 1 ELSE 0 END) as a11,
                       (CASE WHEN age >= 11 and age < 18 THEN 1 ELSE 0 END) as a18,
                       (CASE WHEN age >= 18 and age < 30 THEN 1 ELSE 0 END) as a30,
                       (CASE WHEN age >= 30 and age < 50 THEN 1 ELSE 0 END) as a50,
                       (CASE WHEN age > 50 THEN 1 ELSE 0 END) as a50plus
                FROM `customer_visits` WHERE shop_id IN ($ids) GROUP BY name
            ) as total
        ");

        return (object) $query[0];
    }

 	public function getHomeEmotion ($userShop){
        $shops = [];
        foreach ($userShop as $key => $item){
            $shops[] = $key;
        }
        $query = CustomerVisit::selectRaw("
	         (CASE WHEN emotion = 'happy' THEN 1 ELSE 0 END) as edis,
	         (CASE WHEN emotion = 'fear' THEN 1 ELSE 0 END) as efea,
	         (CASE WHEN emotion = 'angry' THEN 1 ELSE 0 END) as eang,
	         (CASE WHEN emotion = 'sad' THEN 1 ELSE 0 END) as esad,
	         (CASE WHEN emotion = 'neutral' THEN 1 ELSE 0 END) as eneu,
	         (CASE WHEN emotion = 'surprise' THEN 1 ELSE 0 END) as esur
        ")
        ->whereIn('shop_id', $shops)
        ->first();
        return $query;
    }

	// lấy data theo tháng + id shop
	public function getalldata(){
		$finaldata = array();
		// foreach ($idshop as $key => $value) {
        	// echo $value . '  ';
        	$data = CustomerVisit::where([
        		// sửa id shop
			    ['shop_id', '1'],
			])->get();
			$finaldata[] = $data;
        // }
        foreach ($finaldata as $key => $value) {
        	foreach ($value as $key => $v) {
                // echo $v->created_at . '</br>';
                //								sửa tháng
                if (substr($v->created_at,  5, 2) == '09'){
                	echo $v->created_at . '</br>';
                }
                // echo $v;
            }
        }
	}

	public function getAllSumOfVisited(){
		$query = DB::select ("
			SELECT COUNT((SELECT COUNT(*) FROM `customer_visits` WHERE shop_id = shops.id)) AS COUNT
			FROM `shops` right JOIN customer_visits ON shops.id = customer_visits.shop_id 
			GROUP BY shops.id
		");
		return $query;

	}
	public function getTimeOfVisited($userShop){


        $shops = [];
        foreach ($userShop as $key => $item){
            $shops[] = $key;
        }
        $ids = implode(',', $shops);

        $query = DB::select ("SELECT SUM(total.t0) as time0, SUM(total.t3) as time3, SUM(total.t6) as time6, SUM(total.t9) as time9, SUM(total.t12) as time12, SUM(total.t15) as time15, SUM(total.t18) as time18, SUM(total.t21) as time21
            FROM (
                SELECT (CASE WHEN HOUR(created_at) >= 0 and HOUR(created_at) < 3 THEN 1 ELSE 0 END) as t0,
                 (CASE WHEN HOUR(created_at) >= 3 and HOUR(created_at) < 6 THEN 1 ELSE 0 END) as t3,
                 (CASE WHEN HOUR(created_at) >= 6 and HOUR(created_at) < 9 THEN 1 ELSE 0 END) as t6,
                 (CASE WHEN HOUR(created_at) >= 9 and HOUR(created_at) < 12 THEN 1 ELSE 0 END) as t9,
                 (CASE WHEN HOUR(created_at) >= 12 and HOUR(created_at) < 15 THEN 1 ELSE 0 END) as t12,
                 (CASE WHEN HOUR(created_at) >= 15 and HOUR(created_at) < 18 THEN 1 ELSE 0 END) as t15,
                 (CASE WHEN HOUR(created_at) >= 18 and HOUR(created_at) < 21 THEN 1 ELSE 0 END) as t18,
                 (CASE WHEN HOUR(created_at) >= 21 and HOUR(created_at) < 24 THEN 1 ELSE 0 END) as t21
                FROM `customer_visits` WHERE shop_id IN ($ids) GROUP BY name
            ) as total
        ");

        return (object) $query[0];


	}

	public function getRegisted($type, $date, $userShop, $model){
		$customer = new CustomerVisit();
        $this->model = new CustomerRepository($customer);
		$output['loyal'] = 0;
		$output['unknown'] = 0;
		$output['all'] = 0;
		foreach ($userShop as $key => $value) {
			$data = $this->model->getHomeCustomers($type, $date, $value);
			
			$output['loyal'] += $data->loyal;
			$output['unknown'] += $data->unknown;
		}
		$output['all'] = $output['loyal'] + $output['unknown'];
		return $output;
	}

    public function getUserShop(){
        if(Auth::user()->role_id != Consts::ADMIN)
            $data = DB::table("user_shops")->select('shops.id', 'shops.shopname')->Leftjoin('shops', 'user_shops.shop_id', 'shops.id')->where('user_id', Auth::user()->id)->get();
        else
            $data = DB::table("user_shops")->select('shops.id', 'shops.shopname')->Leftjoin('shops', 'user_shops.shop_id', 'shops.id')->get();
		$result = [];
		if(!empty($data)){
			foreach ($data as $item) {
				$result[$item->id] = $item->shopname;
			}
		}
        return $result;
    }

	public function getData($type, $startDate, $endDate, $ShopHave) {
		# lấy DATA theo điều kiện --------------------------------------------------------------------------------
        if ($ShopHave != null) {
        	foreach ($ShopHave as $key => $value) {
	        	// echo $value . '  ';
	        	$data = CustomerVisit::where([
				    ['shop_id', $value],
				    ['created_at', '>=', $startDate],
				    ['created_at', '<=', $endDate],
				])->groupby('name')->get();
				$finaldata[] = $data;
	        }
	    }else{
	    	$finaldata = null;
	    }
	    if ($type != null) {
			# xử lí dữ liệu
			if ($type == 'visited') {
				$day = floor(abs(strtotime($endDate) - strtotime($startDate)) / (60*60*24));
		  	  	$dataOutput = array();
				if($day <= 8){
					if ($ShopHave != null) {
			            foreach ($ShopHave as $key => $value) {
			                $datashop = array();
			                $sum = 0;
			                $deltaday = $startDate;
			                while ($deltaday <= $endDate) {

			                	// lấy dữ liệu MALE
			                    foreach ($finaldata as $key => $vshop) {
			                        foreach ($vshop as $key => $v) {
			                            if ($v->shop_id == $value && substr($v->created_at,  0, 10) == $deltaday) {
			                                $sum++;
			                            }
			                        }
			                    }
			                    $datashop[] = $sum;
			                    $sum = 0;
			                    $deltaday = strftime("%Y-%m-%d", strtotime(date("Y-m-d", strtotime($deltaday)) . " +1 day"));

			                }
			                array_push($dataOutput, $datashop);
			            }
			        }
			    // chia theo tuần
		    	}elseif ($day <= 56) {
		    		if ($ShopHave != null) {
			            foreach ($ShopHave as $key => $value) {
			            	$datashop = array(); 
			                $sum = 0;
			                $start = strftime("%Y-%m-%d", strtotime(date("Y-m-d", strtotime($startDate)) . " -1 week"));

			                $deltaday = $start; // thời điểm bắt đầu 
			                $deltaday2 = strftime("%Y-%m-%d", strtotime(date("Y-m-d", strtotime($deltaday)) . " +1 week"));
			                
			                while ($deltaday < $endDate) {
			                	// lấy dữ liệu MALE
			                    foreach ($finaldata as $key => $vshop) {
				                        foreach ($vshop as $key => $v) {
				                            if ($v->shop_id == $value && $v->created_at >= $deltaday 
				                            	&& $v->created_at < $deltaday2) {
				                                	$sum++;
				                            }
				                        }
				                    }
			                    $datashop[] = $sum;
			                    $sum = 0;
			                    $deltaday = $deltaday2;
			                    $deltaday2 = strftime("%Y-%m-%d", strtotime(date("Y-m-d", strtotime($deltaday)) . " +1 week"));

			                }
			                array_push($dataOutput, $datashop);
				        }
			        }
     			}else{
		    		if ($ShopHave != null) {
			           	foreach ($ShopHave as $key => $value) {
			            	$datashop = array(); 
			                $sum = 0;
			                $start = strftime("%Y-%m-%d", strtotime(date("Y-m-d", strtotime($startDate)) . " -1 month"));

			                $deltaday = $start; // thời điểm bắt đầu 
			                $deltaday2 = strftime("%Y-%m-%d", strtotime(date("Y-m-d", strtotime($deltaday)) . " +1 month"));
			                // dd($finaldata);
			                // dd($deltaday . '___' . $deltaday2 . '___' . $endDate);
			                while ($deltaday < $endDate) {
			                	// lấy dữ liệu MALE
			                    foreach ($finaldata as $key => $vshop) {
				                        foreach ($vshop as $key => $v) {
				                            if ($v->shop_id == $value && $v->created_at >= $deltaday 
				                            	&& $v->created_at < $deltaday2) {
				                                	$sum++;
				                            }
				                        }
				                    }
			                    $datashop[] = $sum;
			                    $sum = 0;
			                    $deltaday = $deltaday2;
			                    $deltaday2 = strftime("%Y-%m-%d", strtotime(date("Y-m-d", strtotime($deltaday)) . " +1 month"));

			                }
			                array_push($dataOutput, $datashop);
				        }
			        }
		    	}
			    return $dataOutput;
			}elseif($type == 'age'){
			    $dataOutput = array();
			    $dataAge = ['0','11','18','30','50','100'];
			    if ($ShopHave != null) {
		            foreach ($ShopHave as $key => $value) {
		                $datashop = array();
		                $sum = 0;
		                for ($i=0; $i < 5; $i++) { 
		                    foreach ($finaldata as $key => $vshop) {
		                        foreach ($vshop as $key => $v) {
		                            if ($v->shop_id == $value && $v->age >= $dataAge[$i] && $v->age < $dataAge[$i+1]) {
		                                $sum++;
		                            }
		                        }
		                    }
		                    $datashop[] = $sum;
		                    $sum = 0;
		                }
		                array_push($dataOutput, $datashop);
		            }
		        }
			    return $dataOutput;
			}elseif ($type =='emotion') {
			    $dataOutput = array();
			    $dataEmotion = ['disgust','fear','angry','sad','neutral','surprise'];
			    if ($ShopHave != null) {
		            foreach ($ShopHave as $key => $value) {
		                $datashop = array();
		                $sum = 0;
		                foreach ($dataEmotion as $key => $valueEmotion) {
		                    foreach ($finaldata as $key => $vshop) {
		                        foreach ($vshop as $key => $v) {
		                            if ($v->shop_id == $value && $v->emotion == $valueEmotion) {
		                                $sum++;
		                            }
		                        }
		                    }
		                    $datashop[] = $sum;
		                    $sum = 0;
		                }
		                array_push($dataOutput, $datashop);
		            }
		        }
			    return $dataOutput;
			}
		}
    }

    // đưa ra laber cho biểu đồ phụ thuộc số ngày
    public function getLabels($startDate, $endDate,$type){
    	$output = array();
    	if($type == 'emotion'){
    		$output = ['disgust','fear','angry','sad','neutral','surprise'];
    		// return $output;
    	}elseif ($type == 'visited') {
    		// 'day' là số ngày giữa 2 mốc thời gian
	    	$day = floor(abs(strtotime($endDate) - strtotime($startDate)) / (60*60*24));
	    	if($day <= 8){
	    		for ($i=0; $i < 7; $i++) {
	    			$output[] = $startDate;
	    			$startDate = strftime("%Y-%m-%d", strtotime(date("Y-m-d", strtotime($startDate)) . " +1 day"));
	    		}
	    	}elseif ($day < 56) {
	    		// for ($i=0; $i < 8; $i++) {
	    		// 	$output[] = $startDate;
	    		// 	$startDate = strftime("%Y-%m-%d", strtotime(date("Y-m-d", strtotime($startDate)) . " +1 week"));
	    		// }
	    		$output = ['week 1', 'week 2', 'week 3', 'week 4', 'week 5', 'week 6', 'week 7', 'week 8'];
	    	}else{
	    		// for ($i=0; $i < 8; $i++) {
	    		// 	$output[] = $startDate;
	    		// 	$startDate = strftime("%Y-%m-%d", strtotime(date("Y-m-d", strtotime($startDate)) . " +1 month"));
	    		// }

	    		$output = ['month 1', 'month 2', 'month 3', 'month 4', 'month 5', 'month 6', 'month 7', 'month 8'];
	    	}
    	}else{
    		$output = ['0-11','11-18','18-30','30-50','50+'];
    	}
		return $output;
    }

    public function getFirstShop($userShop, $ShopHave){
    	
        $shopHave = array();
        if ($ShopHave == null && $userShop == null) {
            $ShopHave[] = null;
        }
        if ($ShopHave == null && $userShop != null) {
            $ShopHave[] = key($userShop);
        }
        return $ShopHave;
    }

    public function getShopType($shopType){
    	if ($shopType == null) {
            return 'visited';
        }else{
        	return $shopType;
        }
    }


    // ------------------------------- Đưa ra khoảng cách giữa 2 ngày Start và End---------------------------------
    public function calcDay($startDate, $endDate){
    	
  		$day = floor(abs(strtotime($endDate) - strtotime($startDate)) / (60*60*24));

  		return $day;
    }

    public function CheckShop($allshop, $shop){
        foreach ($allshop as $key => $value) {
            if($shop == $value->shop_id){
                return true;
            }
        }
        return false;
    }

    public function NextDay($day){
        $day = strtotime(date("Y-m-d", strtotime($startDate)) . " +1 day");
        $day = strftime("%Y-%m-%d", $day);
        return $day;
    }

    public function NextWeek($day){
        $day = strtotime(date("Y-m-d", strtotime($startDate)) . " +1 week");
        $day = strftime("%Y-%m-%d", $day);
        return $day;
    }
    
    public function NextMonth($day){
        $day = strtotime(date("Y-m-d", strtotime($startDate)) . " +1 month");
        $day = strftime("%Y-%m-%d", $day);
        return $day;
    }


    public function getCameras() {
	    $userShop = explode(',',$this->getKeyUserShop());
        return Camera::select('*')
            ->Leftjoin('shops', 'cameras.shop_id', 'shops.id')
            ->whereIn('shop_id',$userShop)
            ->orderBy('cameras.created_at', 'desc')
            ->paginate(10);
    }

    public function getCustomersList ($start, $end){
        $loyal = Customer::where('is_registered', 1)
            ->when(!empty($start), function ($query) use ($start) {
                return $query->where('created_at', '>=', $start);
            })->when(!empty($end), function ($query) use ($end) {
                return $query->where('created_at', '<=', $end);})
            ->groupBy('name')->get();
        $unknown = Customer::WhereNull('is_registered')
            ->when(!empty($start), function ($query) use ($start) {
                return $query->where('created_at', '>=', $start);
            })->when(!empty($end), function ($query) use ($end) {
                return $query->where('created_at', '<=', $end);
            })
            ->groupBy('name')->get();
        return (object) ['loyal' => $loyal, 'unknown' => $unknown];
    }

}
