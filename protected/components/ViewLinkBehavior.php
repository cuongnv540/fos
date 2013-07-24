<?php

/**
 * View Link Behavior to create view link for an instance
 * @author Tran Duc Thang
 */
class ViewLinkBehavior extends CBehavior
{

    /**
     *
     * @var string the attribute to be displayed. Default is 'id'
     */
    public $display_attribute = 'id';
    
    public $controller_name;
    /**
     * Create view link for an instance
     * @param string $text The text to be display, if it is NULL, the attribute will be used instead
     * @param array $htmlOptions The htmlOptions of the link
     * @return string The link generated by CHtml
     */
    public function createViewLink($text = null, $htmlOptions = null)
    {
        $owner = $this->getOwner();
        if (!$text) {
            $text = $owner->{$this->display_attribute};
        }
        $controller = "{$this->controller_name}/view";
        $id = $owner->id;
        return CHtml::link(
            $text, 
            Yii::app()->createUrl($controller, array('id' => $id)), 
            $htmlOptions
        );
    }

}

?>