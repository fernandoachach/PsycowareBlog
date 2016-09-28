<?php
 
class mpw_widget extends WP_Widget {
 
    function mpw_widget(){
        // Constructor del Widget.
        $widget_ops = array('classname' => 'mpw_widget', 'description' => "Descripción de Mi primer Widget" );
        $this->WP_Widget('mpw_widget', "Mi primer Widget", $widget_ops);
    }
 
     function widget($args,$instance){
       echo $before_widget;    
        ?>
        <aside id='mpw_widget' class='widget mpw_widget'>
            <h3 class='widget-title'></h3>
            <p></p>
            <br><br><br>
        </aside>
        <?php
        echo $after_widget;
    }
    
    function update($new_instance, $old_instance){ 
        $instance = $old_instance;
        $instance["mpw_texto"] = strip_tags($new_instance["mpw_texto"]);
        // Repetimos esto para tantos campos como tengamos en el formulario.
        return $instance;     
    }
 
    function form($instance){
        ?>
         <p>
            <label for="<?php echo $this->get_field_id('mpw_texto'); ?>">Texto del Widget</label>
            <input  class="widefat" id="<?php echo $this->get_field_id('mpw_texto'); ?>" name="<?php echo $this->get_field_name('mpw_texto'); ?>" type="text" value="<?php echo esc_attr($instance["mpw_texto"]); ?>" />
         </p>  
         <?php
    }   
} 
 
?>
