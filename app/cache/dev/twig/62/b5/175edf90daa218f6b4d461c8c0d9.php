<?php

/* TimsaControlFletesBundle:Flete:fletes.html.twig */
class __TwigTemplate_62b5175edf90daa218f6b4d461c8c0d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TimsaControlFletesBundle::layout.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TimsaControlFletesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"page-header\">
  <h1>Fletes</h1>
</div>

 ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "
     ";
        // line 13
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
     <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/daterangepicker-bs3.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

 ";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "\t<div class=\"container\">
\t\t<div class=\"container\">
\t\t         <div class=\"span12\">

\t\t            <h4>Simple Date Picker</h4>
\t\t            <div class=\"well\">

\t\t               <form class=\"form-horizontal\">
\t\t                 <fieldset>
\t\t                  <div class=\"control-group\">
\t\t                    <label class=\"control-label\" for=\"reservation\">Reservation dates:</label>
\t\t                    <div class=\"controls\">
\t\t                     <div class=\"input-prepend\">
\t\t                       <span class=\"add-on\"><i class=\"icon-calendar\"></i></span><input type=\"text\" style=\"width: 200px\" name=\"reservation\" id=\"reservation\" value=\"03/18/2013 - 03/23/2013\" /> 
\t\t                     </div>
\t\t                    </div>
\t\t                  </div>
\t\t                 </fieldset>
\t\t               </form>

\t\t            </div>

\t\t            <h4>Simple Date &amp; Time Picker</h4>
\t\t            <div class=\"well\">

\t\t               <form class=\"form-horizontal\">
\t\t                 <fieldset>
\t\t                  <div class=\"control-group\">
\t\t                    <label class=\"control-label\" for=\"reservationtime\">Reservation dates:</label>
\t\t                    <div class=\"controls\">
\t\t                     <div class=\"input-prepend\">
\t\t                       <span class=\"add-on\"><i class=\"icon-calendar\"></i></span>
\t\t                       <input type=\"text\" style=\"width: 300px\" name=\"reservation\" id=\"reservationtime\" value=\"08/01/2013 1:00 PM - 08/01/2013 1:30 PM\"  class=\"span4\"/>
\t\t                     </div>
\t\t                    </div>
\t\t                  </div>
\t\t                 </fieldset>
\t\t               </form>

\t\t               <script type=\"text/javascript\">
\t\t               \$(document).ready(function() {
\t\t                  \$('#reservationtime').daterangepicker({
\t\t                    timePicker: true,
\t\t                    timePickerIncrement: 30,
\t\t                    format: 'MM/DD/YYYY h:mm A'
\t\t                  });
\t\t               });
\t\t               </script>

\t\t            </div>            

\t\t            <h4>Options Usage Example</h4>

\t\t            <div class=\"well\" style=\"overflow: auto\">

\t\t               <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc\">
\t\t                  <i class=\"icon-calendar icon-large\"></i>
\t\t                  <span></span> <b class=\"caret\"></b>
\t\t               </div>

\t\t            </div>

\t\t         </div>
\t\t      </div>

\t</div>
";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/daterangepicker.js"), "html", null, true);
        echo "\"></script>

\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t   \$('#reservation').daterangepicker();
\t\t});
\t</script>

\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t   \$('#reportrange').daterangepicker(
\t\t      {
\t\t         startDate: moment().subtract('days', 29),
\t\t         endDate: moment(),
\t\t         minDate: '01/01/2012',
\t\t         maxDate: '12/31/2014',
\t\t         dateLimit: { days: 60 },
\t\t         showDropdowns: true,
\t\t         showWeekNumbers: true,
\t\t         timePicker: false,
\t\t         timePickerIncrement: 1,
\t\t         timePicker12Hour: true,
\t\t         ranges: {
\t\t            'Today': [moment(), moment()],
\t\t            'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
\t\t            'Last 7 Days': [moment().subtract('days', 6), moment()],
\t\t            'Last 30 Days': [moment().subtract('days', 29), moment()],
\t\t            'This Month': [moment().startOf('month'), moment().endOf('month')],
\t\t            'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
\t\t         },
\t\t         opens: 'left',
\t\t         buttonClasses: ['btn btn-default'],
\t\t         applyClass: 'btn-small btn-primary',
\t\t         cancelClass: 'btn-small',
\t\t         format: 'MM/DD/YYYY',
\t\t         separator: ' to ',
\t\t         locale: {
\t\t             applyLabel: 'Submit',
\t\t             fromLabel: 'From',
\t\t             toLabel: 'To',
\t\t             customRangeLabel: 'Custom Range',
\t\t             daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
\t\t             monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
\t\t             firstDay: 1
\t\t         }
\t\t      },
\t\t      function(start, end) {
\t\t       console.log(\"Callback has been called!\");
\t\t       \$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
\t\t      }
\t\t   );
\t\t   //Set the initial state of the picker label
\t\t   \$('#reportrange span').html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "TimsaControlFletesBundle:Flete:fletes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 90,  141 => 89,  136 => 88,  133 => 87,  63 => 19,  60 => 18,  53 => 14,  49 => 13,  46 => 12,  43 => 11,  34 => 4,  31 => 3,);
    }
}
