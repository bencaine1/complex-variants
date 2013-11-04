<?php
class VariantsController extends AppController {
	
	var $name = 'Variant';
    public $results;

    public function process() {
    	$this->loadModel('Variant');

        ini_set('memory_limit', '-1');

/*
        // TODO: Change this to apply to every time they entered a chromosome number.

    	// load user-entered data
    	$chrnoInput = $this->request->data['Variant']['ChrNo0'];

    	// $chrnoInput: whatever the user entered. $chrno: e.g. chr1. $chrnoJustNumber: e.g. 1.
    	$chrno0 = '';
    	$chrnoJustNumber0 = '';
    	if (strpos($chrnoInput, 'chr') === false) { // if 'chr' not found
    		$chrnoJustNumber = $chrnoInput;
    		$chrno = "chr".$chrnoInput;
    	} else {
    		$chrno = $chrnoInput;
    		$chrnoJustNumber = substr($chrnoInput, -1);
    	}
*/

        $features = array();

        // Build an array of queries like this: 'Variant.RegulatoryFeatures_HMEC !='
        // Each element in $features will be compared with 'Y'.
        for ($i = 0; $i < 4; $i++) {
            $features[$i] = array();
            for ($j = 0; $j < 4; $j++) {
                if ($this->request->data['Variant'][$j]['Features'.$i] === '') {
                    // if they left a "feature" dropdown blank, then set this to something that will always be true --
                    // that ChrNo != 'Y'. Kind of silly, but this is the easiest way I could think to do this.
                    $feature = 'Variant.Chrno !=';
                } else {
                    $feature = 'Variant.';
                    $feature .= $this->request->data['Variant'][$j]['Features'.$i];
                    if ($this->request->data['Variant'][$j]['Connector'.$i] === 'Not') {
                         $feature .= ' !=';
                    }
                }
                $features[$i][$j] = $feature;                    
            }
        }
        

    	// array of results (just minterm 0 for now)
    	$results = $this->Variant->find('all', array('conditions' => array(
            'OR' => array(
                // minterm 0
                array (
                    'OR' => array(
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['0']['ChrNo0'],
                            'Variant.Start >=' => $this->request->data['Variant']['0']['Start0'],
                            'Variant.End <=' => $this->request->data['Variant']['0']['End0']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['1']['ChrNo0'],
                            'Variant.Start >=' => $this->request->data['Variant']['1']['Start0'],
                            'Variant.End <=' => $this->request->data['Variant']['1']['End0']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['2']['ChrNo0'],
                            'Variant.Start >=' => $this->request->data['Variant']['2']['Start0'],
                            'Variant.End <=' => $this->request->data['Variant']['2']['End0']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['3']['ChrNo0'],
                            'Variant.Start >=' => $this->request->data['Variant']['3']['Start0'],
                            'Variant.End <=' => $this->request->data['Variant']['3']['End0']
                        )
                        
                    ),
                    $features[0][0] => 'Y',
                    $features[0][1] => 'Y',
                    $features[0][2] => 'Y',
                    $features[0][3] => 'Y'
                ),
                // minterm 1
                array(
                    'OR' => array(
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['0']['ChrNo1'],
                            'Variant.Start >=' => $this->request->data['Variant']['0']['Start1'],
                            'Variant.End <=' => $this->request->data['Variant']['0']['End1']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['1']['ChrNo1'],
                            'Variant.Start >=' => $this->request->data['Variant']['1']['Start1'],
                            'Variant.End <=' => $this->request->data['Variant']['1']['End1']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['2']['ChrNo1'],
                            'Variant.Start >=' => $this->request->data['Variant']['2']['Start1'],
                            'Variant.End <=' => $this->request->data['Variant']['2']['End1']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['3']['ChrNo1'],
                            'Variant.Start >=' => $this->request->data['Variant']['3']['Start1'],
                            'Variant.End <=' => $this->request->data['Variant']['3']['End1']
                        )
                        
                    ),
                    $features[1][0] => 'Y',
                    $features[1][1] => 'Y',
                    $features[1][2] => 'Y',
                    $features[1][3] => 'Y'
                ),
                // minterm 2
                array(
                    'OR' => array(
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['0']['ChrNo2'],
                            'Variant.Start >=' => $this->request->data['Variant']['0']['Start2'],
                            'Variant.End <=' => $this->request->data['Variant']['0']['End2']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['1']['ChrNo2'],
                            'Variant.Start >=' => $this->request->data['Variant']['1']['Start2'],
                            'Variant.End <=' => $this->request->data['Variant']['1']['End2']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['2']['ChrNo2'],
                            'Variant.Start >=' => $this->request->data['Variant']['2']['Start2'],
                            'Variant.End <=' => $this->request->data['Variant']['2']['End2']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['3']['ChrNo2'],
                            'Variant.Start >=' => $this->request->data['Variant']['3']['Start2'],
                            'Variant.End <=' => $this->request->data['Variant']['3']['End2']
                        )
                        
                    ),
                    $features[2][0] => 'Y',
                    $features[2][1] => 'Y',
                    $features[2][2] => 'Y',
                    $features[2][3] => 'Y'
                ),
                // minterm 3
                array(
                    'OR' => array(
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['0']['ChrNo3'],
                            'Variant.Start >=' => $this->request->data['Variant']['0']['Start3'],
                            'Variant.End <=' => $this->request->data['Variant']['0']['End3']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['1']['ChrNo3'],
                            'Variant.Start >=' => $this->request->data['Variant']['1']['Start3'],
                            'Variant.End <=' => $this->request->data['Variant']['1']['End3']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['2']['ChrNo3'],
                            'Variant.Start >=' => $this->request->data['Variant']['2']['Start3'],
                            'Variant.End <=' => $this->request->data['Variant']['2']['End3']
                        ),
                        array(
                            'Variant.ChrNo' => $this->request->data['Variant']['3']['ChrNo3'],
                            'Variant.Start >=' => $this->request->data['Variant']['3']['Start3'],
                            'Variant.End <=' => $this->request->data['Variant']['3']['End3']
                        )
                        
                    ),
                    $features[3][0] => 'Y',
                    $features[3][1] => 'Y',
                    $features[3][2] => 'Y',
                    $features[3][3] => 'Y'
                )
            )
    	)));
    
        $this->set('results', $results);
    }

    public function download() {
        $this->set('results', $this->results);
        $this->response->file('view/variant/download.php', array('download' => true, 'name' => 'results.txt'));
        $this->response->header('Content-type: text/php');
        //Return reponse object to prevent controller from trying to render a view
        return $this->response;
    }




}