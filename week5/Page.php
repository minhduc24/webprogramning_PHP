<!DOCTYPE html>
<html>
<head>
    <title>Page</title>
</head>
<body>
<?php
    class Page {
        private string $page;
        private string $title;
        private int $year;
        private string $copyright;

        /*
        -addHeader():void
        +addContent(in content: string) :void
        -addFooter(): void
        +get():string
        */

        function __construct($title, $year, $copyright)
        {
            $this->title = $title;
            $this->year = $year;
            $this->copyright = $copyright;
        }

        private function addHeader() {
            $this->page = file_get_contents("Header.php");
        }

        private function addFooter() {
            $this->page = file_get_contents("Footer.php");
            $this->page = "<span>".$this->title.$this->year.$this->copyright."</span></footer>";
        }

        public function addContent() {
            $this->content = file_get_contents("Content.php");
        }

        public function get() {
            $this->addHeader();
            $this->addContent();
            $this->addFooter();
            return $this->page;
        }
    }

?>
</body>
</html>