<?php
class islandOfPersonality
{
    public $islandOfPersonalityID;
    public $image;
    public $name;
    public $color;
    public $shortDescription;
    public function __construct($islandOfPersonalityID, $image, $name, $color, $shortDescription)
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
            <div class="col-12 col-md-6 p-3">
                <a href="view.php?id=' . $this->islandOfPersonalityID . '" style="text-decoration: none;">
                    <button type="submit" id="btnView" name="id" style="background-color:transparent; border:none;">
                        <img src="' . $this->image . '" class="img-fluid">
                    </button>
                </a>
            </div>
            <div class="col-12 col-md-6 p-3 text-bg">
                <h1 class="islandName" style="color:' . $this->color . ';">' . $this->name . '</h1>
                <h5 class="description" style="color:' . $this->color . ';">' . $this->shortDescription . '</h5>
            </div>
        ';
    }
}

class contentHeader
{
    public $name;
    public $color;
    public $longDescription;
    public function __construct($name, $color, $longDescription)
    {
        $this->name = $name;
        $this->color = $color;
        $this->longDescription = $longDescription;
    }

    public function buildHeader()
    {
        return
            '
            <h1 class="title text-center">' . $this->name . '</h1>
            <h5 class="text-bg my-4 p-4" style="color:' . $this->color . ';">' . $this->longDescription . '</h5>
        
        ';
    }
}
class islandContent
{
    public $islandContentID;
    public $islandOfPersonalityID;
    public $image;
    public $content;
    public $color;
    public function __construct($islandContentID, $islandOfPersonalityID, $image, $content, $color)
    {
        $this->islandContentID = $islandContentID;
        $this->islandOfPersonalityID = $islandOfPersonalityID;
        $this->image = $image;
        $this->content = $content;
        $this->color = $color;
    }

    public function buildContentContainer()
    {
        return
            '
            <div class="col-12 col-md-6 p-3">
                <img src="' . $this->image . '" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 p-3 text-bg">
                <h5 class="description" style="color:' . $this->color . ';">' . $this->content . '</h5>
            </div>
        ';
    }
}
?>