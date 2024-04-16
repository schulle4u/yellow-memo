<?php
// Memo extension, https://github.com/schulle4u/yellow-memo

class YellowMemo {
    const VERSION = "0.9.1";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("memoMessageFile", "memo.json");
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="memo" && ($type=="block" || $type=="inline")) {
            list($label, $closeLabel) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($label)) $label = ucfirst($name);
            if (is_string_empty($closeLabel)) $closeLabel = $this->yellow->language->getTextHtml("editOkButton");
            $output = "<div class=\"".htmlspecialchars($name)."-btn\">\n";
            $output .= "<p><button id=\"showMemo\" name=\"showMemo\" data-closeLabel=\"".htmlspecialchars($closeLabel)."\">".htmlspecialchars($label)."</button></p>\n";
            $output .= "</div>\n";
            $output .= "<div role=\"alert\" aria-live=\"assertive\" class=\"memo\" id=\"memo\"></div>\n";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $assetLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreAssetLocation");
            $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$assetLocation}memo.css\" />\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}memo.js\"></script>\n";
        }
        if ($name=="footer") {
            $output .= "<script type=\"application/json\" id=\"memoMessages\">\n";
            $messageFile = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("memoMessageFile");
            $messageData = $this->yellow->toolbox->readFile($messageFile);
            $output .= str_replace(array("\r\n","\r","\n"), "", $messageData);
            $output .= "</script>\n";
        }
        return $output;
    }
}
