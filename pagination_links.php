<?php
        $list_class = "pagination ";
        $row_start = ( ( $curr_page - 1 ) * $limit );

        //get the last page number
        $last = ceil( $total / $limit );

        //calculate start of range for link printing
        $start = ( ( $curr_page - $links ) > 0 ) ? $curr_page - $links : 1;

        //calculate end of range for link printing
        $end = ( ( $curr_page + $links ) < $last ) ? $curr_page + $links : $last;


        //ul boot strap class - "pagination pagination-sm"
        $html = '<ul class="' . $list_class . '">';

        $class = ( $curr_page == 1 ) ? "disabled" : ""; //disable previous page link <<<

        //create the links and pass limit and page as $_GET parameters

        //$this->_page - 1 = previous page (<<< link )
        $previous_page = ( $curr_page == 1 ) ?
        '<a href=""><li class="' . $class . '">&laquo;</a></li>' : //remove link from previous button
        '<li class="' . $class . '"><a href="?limit=' . $limit . '&page=' . ( $curr_page - 1 ) . '">&laquo;</a></li>';

        $html .= $previous_page;

        //New section

       if ( $curr_page > 1 + $links  ) { //print ... before (previous <<< link)
           $html .= '<li><a href="?limit=' . $limit . '&page=1">1</a></li>'; //print first page link
           if($curr_page - $links == 2){

           }else
           {$html .= '<li class="disabled"><span>...</span></li>';} //print 3 dots if not on first page

       }



       //print all the numbered page links
        for ( $i = $start  ; $i <= $end; $i++ ) {
            $class = ( $curr_page == $i ) ? "active" : ""; //highlight current page
            $html .= '<li class="' . $class . '"><a href="?limit=' . $limit . '&page=' . $i . '">' . $i . '</a></li>';
        }


        if ( $end < $last ) { //print ... before next page (>>> link)
          if($curr_page + $links == $last - 1){

          }else
            {$html .= '<li class="disabled"><span>...</span></li>';} //print 3 dots if not on last page

            $html .= '<li><a href="?limit=' . $limit . '&page=' . $last . '">' . $last . '</a></li>'; //print last page link
        }


       $class = ( $curr_page == $last ) ? "disabled" : ""; //disable (>>> next page link)

       //$this->_page + 1 = next page (>>> link)
       $next_page = ( $curr_page == $last) ?
        '<li class="' . $class . '"><a href="">&raquo;</a></li>' : //remove link from next button
        '<li class="' . $class . '"><a href="?limit=' . $limit . '&page=' . ( $curr_page + 1 ) . '">&raquo;</a></li>';

        $html .= $next_page;
        $html .= '</ul>';
        echo $html;


        //Code to see each variable all the time
        // echo '$total: '.$total.' | '; //total rows
        // echo '$row_start: '.$row_start.' | '; //total rows
        // echo '$limit: '.$limit.' | '; //total rows per query
        // echo '$start: '.$start.' | '; //start printing links from
        // echo '$end: '.$end.' | '; //end printing links at
        // echo '$last: '.$last.' | '; //last page
        // echo '$page: '.$curr_page.' | '; //current page
        // echo '$links: '.$links.' <br /> '; //links


?>
