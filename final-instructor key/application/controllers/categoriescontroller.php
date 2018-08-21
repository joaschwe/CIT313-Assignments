<?php
class CategoriesController extends Controller{
	
	protected $categoryObject;


	//set an index to try and get rid of 'fatal error message'
	public function index(){
		$this->categoryObject = new Categories;
		$outcome = $this->categoryObject->getCategories();
		$this->set('categories',$outcome);
	}

	public function getCategories(){
		$this->categoryObject = new Categories;
		$outcome = $this->categoryObject->getCategories();
		}
		
	public function edit($cID){
		$this->categoryObject = new Categories;
		$outcome = $this->categoryObject->getCategory($cID);

		$this->set('category', $outcome);
	}

	public function update(){
		$cID = $_POST['categoryID'];
		$name = $_POST['categoryname'];
		$this->categoryObject = new Categories;
		$outcome = $this->categoryObject->update($cID,$name);

		if($outcome){
			$this->set('message','Category updated.');
		}
		else{
			$this->set('message','Error.');
		}
		$outcome = $this->categoryObject->getCategories();
		$this->set('categories',$outcome);
	}

	public function add(){
		$new = $_POST['newCategory'];
		$this->categoryObject = new Categories;
		$outcome = $this->categoryObject->addCategory($new);

		if(isset($outcome) and !empty($outcome)){
			$this->set('message','Category added.');
		}
		else{
			$this->set('message','Error adding category.');
		}
		
		$outcome = $this->categoryObject->getCategories();
		$this->set('categories',$outcome);
	}

}
?>
