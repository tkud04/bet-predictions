<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract; 
use Crypt;
use Carbon\Carbon; 
use Mail;
use Auth;
use \Swift_Mailer;
use \Swift_SmtpTransport;
use App\Models\User;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\Products;
use App\Models\ProductData;
use App\Models\ProductImages;
use App\Models\Senders;
use App\Models\Plugins;
use App\Models\Settings;
use GuzzleHttp\Client;

class Helper implements HelperContract
{    

           
                        
             public $signals = ['okays'=> ["login-status" => "Sign in successful",            
                     "signup-status" => "Account created successfully!",
                     "update-profile-status" => "Profile updated!",
                     "contact-status" => "Message sent! Our customer service representatives will get back to you shortly.",
                     ],
                     'errors'=> ["login-status-error" => "There was a problem signing in, please contact support.",
					 "signup-status-error" => "There was a problem signing in, please contact support.",
					 "update-profile-status-error" => "There was a problem updating your profile, please contact support.",
					 "contact-status-error" => "There was a problem sending your message, please contact support.",
                    ]
                   ];


          function sendEmailSMTP($data,$view,$type="view")
           {
           	    // Setup a new SmtpTransport instance for new SMTP
                $transport = "";
if($data['sec'] != "none") $transport = new Swift_SmtpTransport($data['ss'], $data['sp'], $data['sec']);

else $transport = new Swift_SmtpTransport($data['ss'], $data['sp']);

   if($data['sa'] != "no"){
                  $transport->setUsername($data['su']);
                  $transport->setPassword($data['spp']);
     }
// Assign a new SmtpTransport to SwiftMailer
$smtp = new Swift_Mailer($transport);

// Assign it to the Laravel Mailer
Mail::setSwiftMailer($smtp);

$se = $data['se'];
$sn = $data['sn'];
$to = $data['em'];
$subject = $data['subject'];
                   if($type == "view")
                   {
                     Mail::send($view,$data,function($message) use($to,$subject,$se,$sn){
                           $message->from($se,$sn);
                           $message->to($to);
                           $message->subject($subject);
                          if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
						  $message->getSwiftMessage()
						  ->getHeaders()
						  ->addTextHeader('x-mailgun-native-send', 'true');
                     });
                   }

                   elseif($type == "raw")
                   {
                     Mail::raw($view,$data,function($message) use($to,$subject,$se,$sn){
                            $message->from($se,$sn);
                           $message->to($to);
                           $message->subject($subject);
                           if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }
           }    

           function createUser($data)
           {
           	$ret = User::create(['fname' => $data['fname'], 
                                                      'lname' => $data['lname'], 
                                                      'email' => $data['email'], 
                                                     'role' => $data['role'], 
                                                      'status' => $data['status'], 
                                                     'verified' => $data['verified'], 
                                                      'password' => bcrypt($data['password']), 
                                                      'remember_token' => "default",
                                                      'reset_code' => "default"
                                                      ]);
                                                      
                return $ret;
           }

           
           function addSettings($data)
           {
           	$ret = Settings::create(['item' => $data['item'],                                                                                                          
                                                      'value' => $data['value'], 
                                                      'type' => $data['type'], 
                                                      ]);
                                                      
                return $ret;
           }
           
           function getSetting($i)
          {
          	$ret = "";
          	$settings = Settings::where('item',$i)->first();
               
               if($settings != null)
               {
               	//get the current withdrawal fee
               	$ret = $settings->value;
               }
               
               return $ret; 
          }
          
 
           
           function getUser($email)
           {
           	$ret = [];
               $u = User::where('email',$email)
			            ->orWhere('id',$email)->first();
 
              if($u != null)
               {
                   	$temp['fname'] = $u->fname; 
                       $temp['lname'] = $u->lname; 
                       $temp['class'] = $u->class;
                       $temp['email'] = $u->email; 
                       $temp['role'] = $u->role; 
                       $temp['status'] = $u->status; 
                       $temp['id'] = $u->id; 
                       $temp['date'] = $u->created_at->format("jS F, Y");  
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }
		   
		   function getUsers($id="all")
           {
           	$ret = [];
               if($id == "all") $uu = User::where('id','>','0')->get();
               else $uu = User::where('role',$id)->get();
 
              if($uu != null)
               {
				  foreach($uu as $u)
				    {
                       $temp = $this->getUser($u->id);
                       array_push($ret,$temp); 
				    }
               }                          
                                                      
                return $ret;
           }	  

           function updateUser($data)
           {  
              $ret = 'error'; 
         
              if(isset($data['email']))
               {
               	$u = User::where('email', $data['email'])->first();
                   
                        if($u != null)
                        {
							$role = $u->role;
							
							
                        	$u->update(['fname' => $data['fname'],
                                              'lname' => $data['lname'],
                                              'email' => $data['email']
                                           ]);
							
                             
                             $ret = "ok";
                        }                                    
               }                                 
                  return $ret;                               
           }
           
           function createPlugin($data)
           {
               $ret = Plugins::create([
                   'name' => $data['name'],
                   'value' => $data['value'],
                   'status' => $data['status']
               ]);

               return $ret;
           }

           function getPlugins()
           {
               $ret = [];
               $plugins = Plugins::where('id','>','0')->get();

               if($plugins != null)
               {
                  foreach($plugins as $p)
                  {
                      $temp = $this->getPlugin($p->id);
                      array_push($ret,$temp);
                  }
               }

               return $ret;
           }

           function getPlugin($id)
           {
               $ret = [];
               $p = Plugins::where('id',$id)->first();

               if($p != null)
               {
                   $ret['id'] = $p->id;
                   $ret['name'] = $p->name;
                   $ret['value'] = $p->value;
                   $ret['status'] = $p->status;
               }

               return $ret;
           }

           function updatePlugin($data)
           {
            $ret = [];
            $p = Plugins::where('id',$data['id'])->first();
            
            if($p != null)
            {
                $p->update([
                    'name' => $data['name'],
                    'value' => $data['value'],
                    'status' => $data['status']
                ]);
            }
           }

           function removePlugin($id)
           {
               $p = Plugins::where('id',$id)->first();

               if($p != null) $p->delete();
           }
          
           function hasKey($arr,$key) 
           {
           	$ret = false; 
               if( isset($arr[$key]) && $arr[$key] != "" && $arr[$key] != null ) $ret = true; 
               return $ret; 
           }          
		   

		   
		   function bomb($data) 
           {
           	//form query string
               $qs = "sn=".$data['sn']."&sa=".$data['sa']."&subject=".$data['subject'];

               $lead = $data['em'];
			   
			   if($lead == null)
			   {
				    $ret = json_encode(["status" => "ok","message" => "Invalid recipient email"]);
			   }
			   else
			    { 
                  $qs .= "&receivers=".$lead."&ug=deal"; 
               
                  $config = $this->emailConfig;
                  $qs .= "&host=".$config['ss']."&port=".$config['sp']."&user=".$config['su']."&pass=".$config['spp'];
                  $qs .= "&message=".$data['message'];
               
			      //Send request to nodemailer
			      $url = "https://radiant-island-62350.herokuapp.com/?".$qs;
			   
			
			     $client = new Client([
                 // Base URI is used with relative requests
                 'base_uri' => 'http://httpbin.org',
                 // You can set any number of default request options.
                 //'timeout'  => 2.0,
                 ]);
			     $res = $client->request('GET', $url);
			  
                 $ret = $res->getBody()->getContents(); 
			 
			     $rett = json_decode($ret);
			     if($rett->status == "ok")
			     {
					//  $this->setNextLead();
			    	//$lead->update(["status" =>"sent"]);					
			     }
			     else
			     {
			    	// $lead->update(["status" =>"pending"]);
			     }
			    }
              return $ret; 
           }
		   
		   function getPosts()
           {
			   $d = date("jS F, Y h:i A");
           	 $ret = [
				     ['flink' => "#",'title' => "Blog Post 1",'category' => "ads",'img' => "images/small_author.png",'content' => "This is a sample blog post content. Simply using this to fill the page.",'likes' => "4",'status' => "ok",'date' => $d],
				     ['flink' => "#",'title' => "Blog Post 2",'category' => "medicine",'img' => "images/small_author.png",'content' => "This is a sample blog post content. Simply using this to fill the page.",'likes' => "2",'status' => "ok",'date' => $d],
				  ];
				  
               //$cc = Posts::where('id','>','0')->get();
               $cc = null;
               if($cc != null)
               {
				   if(count($cc) > 0) $ret = [];
                foreach($cc as $c)
			     {
				  $temp['flink'] = $c->flink; 
				  $temp['title'] = $c->title; 
				  $temp['category'] = $c->category; 
				  $temp['img'] = $c->img;
				  $temp['content'] = $c->content;
				   $temp['likes'] = $c->likes;
				  $temp['status'] = $c->status;
				   $temp['date'] = $c->created_at->format("jS F, Y h:i A"); 
				  array_push($ret,$temp);
			    }                
              }	  
                return $ret;
           }	  
		   
		   function getTestimonials()
           {

           	 $ret = [
				     ['job' => "Eye Insurance",'name' => "George",'img' => "images/locations/loc-3.jpg",'content' => "Kudos to mtb I have been receiving a lot of orders since I began advertising with them"],
				     ['job' => "Maternity drugs",'name' => "Seun",'img' => "images/locations/loc-3.jpg",'content' => "I highly recommend this company for your adverts in Nigeria. I am completely satisfied with their service"],
				     ['job' => "Diabetes",'name' => "Tayo",'img' => "images/locations/loc-3.jpg",'content' => "This guys are awesome! Its very hard to find a service like this in Nigeria today"],
				  
				  ];
				  
              	  
                return $ret;
           }

           function getPasswordResetCode($user)
           {
           	$u = $user; 
               
               if($u != null)
               {
               	//We have the user, create the code
                   $code = bcrypt(rand(125,999999)."rst".$u->id);
               	$u->update(['reset_code' => $code]);
               }
               
               return $code; 
           }
           
           function verifyPasswordResetCode($code)
           {
           	$u = User::where('reset_code',$code)->first();
               
               if($u != null)
               {
               	//We have the user, delete the code
               	$u->update(['reset_code' => '']);
               }
               
               return $u; 
           }		   
		   
		   function getSKU()
		   {
			   return "ADV".rand(1999,9999999);
		   }
		   
		   function addCategory($data)
           {
             $id = isset($data['id']) ? $data['id'] : "vybz";
           	 $ret = Categories::where('id',$id)->first();
			 //dd($data);
			if($ret == null)
			{
				#'tnum', 'stype', 'weight', 'origin', 'bmode', 'freight', 'mode', 'dest', 'desc', 'status'
				$ret = Categories::create(['name' => $data['name'], 
                                         ]);
			}
            else
            {
                Categories::update([
                    'name' => $data['name']
                ]);
            }
			
            return $ret;
           }
           
          
		   function getCategory($id,$params = [])
           {
           	$ret = [];
               $c = Categories::where(id,$id)->first();
 
              if($c != null)
               {
               	#'tnum', 'stype', 'weight', 'origin', 'bmode', 'freight', 'mode', 'dest', 'desc', 'status'
                   $temp['id'] = $c->id; 
                   $temp['date'] = $c->created_at->format("jS F, Y"); 
                   $temp['last_updated'] = $c->updated_at->format("jS F, Y");

                         if(isset($params['mode']) && $params['mode'] == "with_subcategories")
                         {
                             $temp['subcategories'] = $this->getSubCategories(['category_id' => $c->id]);
                         }
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }	

           function getCategories($params = [])
           {
           	   $ret = [];
				   $categories =  Categories::where('id','>','0')->latest()->get();
				   
				   if($categories != null)
				   {
					  foreach($categories as $c)
					  {
                   	     $temp = $this->getCategory($t->tnum, $params);
                         array_push($ret,$temp); 
					  }
                    }                          
                                                      
                return $ret;
           }

           function removeCategory($data)
           {
              $c = Categories::where('id',$data['id'])->first();

               if($c != null)
               {
                   SubCategories::where('category_id',$c->id)->delete();
                   $c->delete();
               }
           }

           function addSubCategory($data)
           {
             $id = isset($data['id']) ? $data['id'] : "vybz";
           	 $ret = SubCategories::where('id',$id)->first();
			 //dd($data);
			if($ret == null)
			{
				#'tnum', 'stype', 'weight', 'origin', 'bmode', 'freight', 'mode', 'dest', 'desc', 'status'
				$ret = SubCategories::create(['name' => $data['name'], 
                                         ]);
			}
            else
            {
                SubCategories::update([
                    'name' => $data['name']
                ]);
            }
			
            return $ret;
           }

           function getSubCategory($id,$params = [])
           {
           	$ret = [];
               $s = SubCategories::where(id,$id)->first();
 
              if($s != null)
               {
               	#'tnum', 'stype', 'weight', 'origin', 'bmode', 'freight', 'mode', 'dest', 'desc', 'status'
                   $temp['id'] = $s->id; 
                   $temp['category_id'] = $s->category_id;
                   $temp['date'] = $s->created_at->format("jS F, Y"); 
                   $temp['last_updated'] = $s->updated_at->format("jS F, Y");

                         if(isset($params['mode']) && $params['mode'] == "with_brands")
                         {
                             $temp['brands'] = $this->getBrands(['brand' => $s->id]);
                         }
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }	

           function getSubCategories($params = [])
           {
           	   $ret = [];
				   $subs =  SubCategories::where('id','>','0')->latest()->get();
				   
				   if($subs != null)
				   {
					  foreach($subs as $s)
					  {
                   	     $temp = $this->getSubCategory($s->id, $params);
                         array_push($ret,$temp); 
					  }
                    }                          
                                                      
                return $ret;
           }

           function removeSubCategory($data)
           {
               $s = SubCategories::where('id',$data['id'])->first();

               if($s != null)
               {
                  $s->delete();
               }
           }

           function addProduct($data)
           {
             $id = isset($data['id']) ? $data['id'] : "vybz";
           	 $ret = Products::where('id',$id)->first();
			 //dd($data);
			if($ret == null)
			{
				$ret = Products::create([
                    'sku' => $this->getSKU(),
                    'name' => $data['name'], 
                    'category_id' => $data['category_id'],
                    'subcategory_id' => $data['subcategory_id'],
                    'qty' => $data['qty'],
                    'status' => $data['status']
                ]);

                $data['sku'] = $ret->sku;
			}
            else
            {
                $temp = [];
                if(isset($data['name'])) $temp['name'] = $data['name'];
                if(isset($data['qty'])) $temp['qty'] = $data['qty'];
                if(isset($data['status'])) $temp['status'] = $data['status'];
                $ret->update($temp);

            }

            $pd = $this->addProductData($data);
            $imgs = $this->addProductImages($data);
			
            return $ret;
           }

           function getProduct($id,$params = [])
           {
           	$ret = [];
               $p = Products::where(id,$id)->first();
 
              if($p != null)
               {
               	   $temp['id'] = $p->id; 
               	   $temp['sku'] = $p->sku; 
                   $temp['category_id'] = $p->category_id;
                   $temp['subcategory_id'] = $p->subcategory_id;
                   $temp['name'] = $p->name;
                   $temp['qty'] = $p->qty;
                   $temp['status'] = $p->status;
                   $temp['data'] = $this->getProductData($p->sku);
                   $temp['images'] = $this->getProductImages($p->sku);
                   $temp['date'] = $p->created_at->format("jS F, Y"); 
                   $temp['last_updated'] = $p->updated_at->format("jS F, Y");
                   $ret = $temp; 
               }                          
                                                      
                return $ret;
           }	

           function getProducts($params = [])
           {
           	   $ret = [];
				   $products =  Products::where('id','>','0')->latest()->get();
				   
				   if($products != null)
				   {
					  foreach($products as $p)
					  {
                   	     $temp = $this->getProduct($p->id, $params);
                         array_push($ret,$temp); 
					  }
                    }                          
                                                      
                return $ret;
           }

           function removeProduct($data)
           {
              $sku = $data['sku'];
               $p = Products::where('sku',$sku)->first();

               if($p != null)
               {
                  ProductData::where('sku',$sku)->delete();
                  ProductImages::where('sku',$sku)->delete();
                  $p->delete();
               }
           }


           function addProductData($data)
           {
            $ret = ProductData::where('sku',$data['sku'])->first();

            if($ret == null)
            {
                $ret = ProductData::create([
                    'sku' => $data['sku'],
                    'price' => $data['price'], 
                    'availability' => $data['availability'],
                    'description' => $data['description'],
                    'rating' => $data['rating'],
                ]);
            }
            else
            {
                $temp = [];
                if(isset($data['price'])) $temp['price'] = $data['price'];
                if(isset($data['availability'])) $temp['availability'] = $data['availability'];
                if(isset($data['description'])) $temp['description'] = $data['description'];
                if(isset($data['rating'])) $temp['rating'] = $data['rating'];
                $ret->update($temp);
            }
            
			
            return $ret;
           }

           function getProductData($sku)
           {
           	$ret = [];
               $pd = ProductData::where('sku',$sku)->first();
 
              if($pd != null)
               {
               	   $temp['id'] = $pd->id; 
               	   $temp['sku'] = $pd->sku; 
                   $temp['price'] = $pd->price;
                   $temp['availability'] = $pd->availability;
                   $temp['description'] = $pd->description;
                   $temp['rating'] = $pd->qty;
                   $temp['date'] = $pd->created_at->format("jS F, Y"); 
                   $temp['last_updated'] = $pd->updated_at->format("jS F, Y");
                   $ret = $temp; 
               }                          
                                                      
                return $ret;
           }	

           function removeProductData($data)
           {
              $sku = $data['sku'];
               $pd = ProductData::where('sku',$sku)->first();

               if($pd != null)
               {
                 $pd->delete();
               }
           }


           function addProductImages($data)
           {
            $ret = ProductImages::where('sku',$data['sku'])->first();

            if($ret == null)
            {
                $ret = ProductImages::create([
                    'sku' => $data['sku'],
                    'url' => $data['url'],
                ]);
            }
            else
            {
                $temp = [];
                if(isset($data['sku'])) $temp['sku'] = $data['sku'];
                if(isset($data['url'])) $temp['url'] = $data['url'];
                $ret->update($temp);
            }
            
			
            return $ret;
           }

           function getProductImages($sku)
           {
           	$ret = [];
               $imgs = ProductImages::where('sku',$sku)->first();
 
              if($imgs != null)
               {
               	   $temp['id'] = $imgs->id; 
               	   $temp['sku'] = $imgs->sku; 
                   $temp['url'] = $imgs->url;
                   $ret = $temp; 
               }                          
                                                      
                return $ret;
           }	

           function removeProductImages($data)
           {
              $sku = $data['sku'];
               $imgs = ProductImages::where('sku',$sku)->first();

               if($imgs != null)
               {
                 $imgs->delete();
               }
           }


  
           function getDashboardStats()
           {
               $ret = []; $temp = [];
               $ret['users'] = User::where('status','ok')->count();
               $ret['trackings'] = Trackings::where('id','>','0')->count();
               $ret['plugins'] = Plugins::where('status','active')->count();

               $topTrackings = Trackings::where('id','>','0')->latest()->paginate(5);
               foreach($topTrackings as $tt)
               {
                   $temp2 = $this->getTracking($tt->tnum,['mode' => "all"]);
                   array_push($temp,$temp2);
               }
               $ret['topTrackings'] = $temp;

               return $ret;
           }

           function removeTracking($data)
           {
               $tnum = $data['tnum'];
               $t = Trackings::where('tnum',$tnum)->first();

               if($t != null)
               {
                   Shippers::where('tnum',$tnum)->delete();
                   Receivers::where('tnum',$tnum)->delete();
                   TrackingHistory::where('tnum',$tnum)->delete();

                   $t->delete();
               }
           }
           
           
}
?>