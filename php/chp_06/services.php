<?php

require ('page.php');

class ServicesPage extends Page
{
    // attributes
    private $services_buttons = ['Re-engineering'     => 'reengineering.php',
                                'Standrds Compliance' => 'standards.php',
                                'Buzzword Compliance' => 'buzzword.php',
                                'Mission Statements'  => 'mission.php'
                                ];

    // functions

    public function display() {
        echo "<html>\n\t<head>\n";
        $this->display_title();
        $this->display_keywords();
        $this->display_styles();
        echo "</head>\n\t<body>\n\t";
        $this->display_header();
        $this->display_menu($this->buttons);
        $this->display_menu($this->services_buttons);
        echo $this->content;
        $this->display_footer();
        echo "</body>\n</html>\n";
    }
}

$services = new ServicesPage();

$services->content = "<p>At TLA Consulting, we offer a number
of services. Perhaps the productivity of your employees would
improve if we re-engineered your business. Maybe all your business
needs is a fresh mission statement, or a new batch of buzzwords.</p>";

$services->display();

?>
