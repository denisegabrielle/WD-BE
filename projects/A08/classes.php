<?php
class islandOfPersonality
{
    public $islandOfPersonalityID;
    public $image;
    public $name;
    public $color;
    public $shortDescription;

    public function __construct( $islandOfPersonalityID, $image, $name,  $color, $shortDescription)
    {
        $this->islandOfPersonalityID = $islandOfPersonalityID;
        $this->image = $image;
        $this->name = $name;
        $this->color = $color;
        $this->shortDescription = $shortDescription;
    }

    public function buildIslandOfPersonalityContainer()
    {
        return
        '
        <div class="row align-items-center mt-5">
            <div class="col-12 col-md-6 p-3">
                
                    <a href="view.php?id='.$this->islandOfPersonalityID.'" style="text-decoration: none;">
                        <button type="submit" id="btnView" name="id" style="background-color:transparent; border:none;">
                            <img src="'.$this->image.'" class="img-fluid">
                        </button>
                    </a>
            </div>
            <div class="col-12 col-md-6 p-3 text-bg">
                <h1 class="islandName" style="color:'.$this->color.';">'.$this->name.'</h1>
                <h5 class="islandShortDesc" style="color:'.$this->color.';">'.$this->shortDescription.'</h5>
            </div>
        </div>
        ';
    }
}
class islandContent{
    public $islandContentID;
    public $islandOfPersonalityID;
    public $name;
    public $longDescription;
    public $image;
    public $content;
    public $color;

    public function __construct($islandContentID, $islandOfPersonalityID, $name, $longDescription, $image, $content, $color) {
        $this->islandContentID = $islandContentID;
        $this->islandOfPersonalityID = $islandOfPersonalityID;
        $this->name = $name;
        $this->longDescription = $longDescription;
        $this->image = $image;
        $this->content = $content;
        $this->color = $color;
    }

    // public function buildContentContainer()
    // {
    //     return
    //     '
    //     <div class="row align-items-center mt-5">
    //         <div class="col-12 col-md-6 p-3">
    //             <form>
    //                 <a href="view.php?id='.$this->islandContentID.'">
    //                     <button type="submit" id="id" name="id" style="background-color:transparent; border:none;">
    //                         <img src="'.$this->image.'" class="img-fluid">
    //                     </button>
    //                 </a>
    //             </form>
    //         </div>
    //         <div class="col-12 col-md-6 p-3 text-bg">
    //             <h5 class="islandShortDesc" style="color:'.$this->color.';">'.$this->content.'</h5>
    //         </div>
    //     </div>
    //     ';
    // }
}
?>