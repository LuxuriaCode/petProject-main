<?php

namespace App\Models;

class Model {
    protected $name;
    protected $data;
    protected $active;

    private function loadJson() {
        $file_name = ROOTPATH.'/Database/'.$this->name.'.json';

        $file = fopen($file_name, 'r');
        $this->data = json_decode(fread($file, filesize($file_name)), true);
        fclose($file);
    }

    public function __construct() {
        $this->loadJson();
    }

    public function getAll() {
        return $this->data['database'];
    }

    public function find($id) {
        foreach($this->data['database'] as $item) {
            if($id == $item['id']) {
                // Нашли
                $this->active = $item;

                return $item;
            }
        }
    }

    public function create($info) {
       $max = count($this->data['database']);
       $item = $this->data['database'][$max - 1];
       $newId = intval($item['id']) + 1;
       $save = $info;
       $save['id'] = $newId;
       $this->data['database'][] = $save;  
       $this->save();
    }

    private function save() {
        $file_name = ROOTPATH.'/Database/'.$this->name.'.json';

        $file = fopen($file_name, 'w+');
        fwrite($file, json_encode($this->data));
        fclose($file); 
    }

    private function language() {

    }
    

    public function translationBatton($languageBatton) {
        $language = fopen($language_name, 'r');
        $this->TranslationBatton = json_decode(fread($language, filesize($language_name)), true);
        fclose($file);
        if($languageBatton = True){
            
        }
    }

    
}
echo "# petProject-main" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/LuxuriaCode/petProject-main.git
git push -u origin main