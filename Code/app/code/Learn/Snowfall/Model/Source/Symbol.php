<?php
/**
 * @author VIJAYAKUMAR S
 * @copyright Copyright (c) 2018
 * @package Learn_Snowfall
 */
namespace Learn\Snowfall\Model\Source;

class Symbol implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $row = 1;
        foreach (range('A', 'Z') as $char) {
            $br_tag = ($row % 10 == 0) ? "<br />" : " ";
            $data[] = array(
                'value' => "1*".$char,
                'label' => "<label class='snowfall'>".$char."</label>". $br_tag,
            );
            $row++;
        }
        foreach (range('a', 'z') as $char) {
            $br_tag = ($row % 10 == 0) ? "<br />" : " ";
            $data[] = array(
                'value' => "1*".$char,
                'label' => "<label class='snowfall'>".$char."</label>". $br_tag,
            );
            $row++;
        }
        foreach (range('0', '9') as $char) {
            $br_tag = ($row % 10 == 0) ? "<br />" : " ";
            $data[] = array(
                'value' => "1*".$char,
                'label' => "<label class='snowfall'>".$char."</label>". $br_tag,
            );
            $row++;
        }
        foreach (range('A', 'Z') as $char) {
            $br_tag = ($row % 10 == 0) ? "<br />" : " ";
            $data[] = array(
                'value' => "2*".$char,
                'label' => "<label class='heartsfall'>".$char."</label>". $br_tag,
            );
            $row++;
        }
        foreach (range('a', 'z') as $char) {
            $br_tag = ($row % 10 == 0) ? "<br />" : " ";
            $data[] = array(
                'value' => "2*".$char,
                'label' => "<label class='heartsfall'>".$char."</label>". $br_tag,
            );
            $row++;
        }
        /*
        foreach (range('0', '9') as $char) {
            $br_tag = ($row % 10 == 0) ? "<br />" : " ";
            $data[] = array(
                'value' => "2*".$char,
                'label' => "<label class='heartsfall'>".$char."</label>". $br_tag,
            );
            $row++;
        }
        */
    return $data;

        // return array(
        //     array(
        //         'value' => '',
        //         'label' => __('-- Select --')
        //     ),
        //     array(
        //         'value' => 'on',
        //         'label' => __('On')
        //     ),
        //     array(
        //         'value' => 'off',
        //         'label' => __('Off')
        //     )
        // );
    }
    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    // public function toArray()
    // {
    //     return [
    //             '' => __('-- Select --'),
    //             'on' => __('On'),
    //             'off' => __('Off')
    //     ];
    // }
}