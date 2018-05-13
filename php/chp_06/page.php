<?php

class Page
{
    // attributes
    public $content;
    public $title = "TLA Consulting Pty Ltd";
    public $keywords = "TLA Consulting, Three Letter Abbreviation,
                        some of my best freinds are search engines";
    public $buttons = ['Home'     => 'home.php',
                       'Contact'  => 'contact.php',
                       'Services' => 'services.php',
                       'Site Map' => 'map.php'
                      ];

    // functions
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function display() {
        echo "<html>\n\t<head>\n";
        $this->display_title();
        $this->display_keywords();
        $this->display_styles();
        echo "</head>\n\t<body>\n\t";
        $this->display_header();
        $this->display_menu($this->buttons);
        echo $this->content;
        $this->display_footer();
        echo "</body>\n</html>\n";
    }

    public function display_title() {
        echo "<title>".$this->title."</title>";
    }

    public function display_keywords() {
        echo "<meta name=\"keywords\" charset=\"utf-8\" content=\""
             .$this->keywords."'/>";
    }

    public function display_styles() {
        ?>
        <link href="styles.css" type="text/css" rel="stylesheet" />
        <?php
    }

    public function display_header() {
        ?>
        <!-- page header -->
        <header>
          <img src="logo.gif" alt="TLA logo" height="70" width="70" />
          <h1>TLA Consulting</h1>
        </header>
        <?php
    }

    public function display_menu($buttons) {
        echo "<!-- menu -->
        <nav>";

        while (list($name, $url) = each($buttons)) {
            $this->display_button($name, $url,
                                  !$this->is_url_current_page($url));
        }
        echo "</nav>\n";
    }

    public function is_url_current_page($url) {
        if (strpos($_SERVER['PHP_SELF'], $url) === false) {
            return false;
        } else {
            return true;
        }
    }

    public function display_button($name, $url, $active=true) {
        if ($active) { ?>
            <div class="menu-item">
              <a href="<?= $url ?>">
                <img src="s-logo.gif" alt="" height="20" width="20" />
                <span class="menu-text"><?= $name ?></span>
              </a>
            </div>
            <?php
        } else { ?>
            <div class="menu-item">
              <img src="side-logo.gif" />
              <span class="menu-text"><?= $name ?></span>
            </div>
            <?php
        }
    }

    public function display_footer(){
        ?>
        <!-- footer -->
        <footer>
          <p>
            &copy; TLA Consulting Pty Ltd.<br />
            Please see our
            <a href="legal.php">legal information page</a>.
          </p>
        </footer>
        <?php
    }
}

?>
