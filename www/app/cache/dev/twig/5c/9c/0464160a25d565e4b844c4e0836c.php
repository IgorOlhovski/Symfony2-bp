<?php

/* WebProfilerBundle:Collector:time.html.twig */
class __TwigTemplate_5c9c0464160a25d565e4b844c4e0836c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_a7c844759c49169c2fb00a21fa1fd1ce2d45f941"] = $this;
        // line 5
        if ((!array_key_exists("colors", $context))) {
            // line 6
            $context["colors"] = array("default" => "#aacd4e", "section" => "#666", "event_listener" => "#3dd", "event_listener_loading" => "#add", "template" => "#dd3", "doctrine" => "#d3d", "propel" => "#f4d", "child_sections" => "#eed");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_toolbar($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["duration"] = ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"))) ? (sprintf("%.0f ms", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration"))) : ("n/a"));
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        <img width=\"16\" height=\"28\" alt=\"Time\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAABqUlEQVR42t2Vv0sCYRyHX9OmEhsMx/YKGlwLQ69DTEUSBJEQEy5J3FRc/BsuiFqEIIcQIRo6ysUhoaBBWhoaGoJwiMJLglRKrs8bXgienmkQdPDAwX2f57j3fhFJkkbiPwTK5bIiFoul3kmPud8MqKMewDXpwuGww+12n9hsNhFnlijYf/Z4PDmO45Yxo+10ZFGTyWRMEItU6AdCx7lczkgd6n7J2Wx2xm63P6jJMk6n80YQBBN1aUDv9XqvlAbbm2LE7/cLODRB0un0VveAeoDC8/waCQQC18MGQqHQOcEKvw8bcLlcL6TfYnVtCrGRAlartUUYhmn1jKg/E3USjUYfhw3E4/F7ks/nz4YNFIvFQ/ogbUYikdefyqlU6gnuOg2YK5XKvs/n+xhUDgaDTVEUt+HO04ABOBA5isViDTU5kUi81Wq1AzhWMEkDGmAEq2C3UCjcYXGauDvfEsuyUjKZbJRKpVvM8IABU9SVX+cxYABmwIE9cFqtVi9xtgvsC2AHbIAFoKey0gdlHEyDObAEWLACFsEsMALdIJ80+dK0bTS95v7+v/AJnis0eO906QwAAAAASUVORK5CYII=\"/>
        <span>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : $this->getContext($context, "duration")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : $this->getContext($context, "duration")), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        // line 34
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAACz0lEQVR42t2XXWhSYRjHc+pyWrC10e66qKggiGoF0Qh1SBPFDxCcX00yrG6EImFsRhAuvUjwQgZB1EUICYEkgRJGB0QmKMNGEYx1URYEg2w6amWY/YUXXH7Ms9M5RAk/PByf8/58P573ec+2Wq32V/g3xFKpdB3UQBV8JVTJvXUuxbXN+P96TODNzMzsNJvNo3UCgYCYszmmKKrPYrE4NBrNU7lcvtY8xGNjYyWtVvvEZrPZES9kQyy02+3nx8fH3xFJV5RK5RuHw2GqP8tInEgk+g0GwyN6wlZMJtPdfD6/Y0viVCo1iKHLMpM20Ov1FNqT0BWLsWhiXdImDyiQ7ybHVN1HnKibWHgNHxr5egXI6t90ej49PX0BsYKO4qWlpT1qtXqFhlhGnpHREWPaPiB2dydxL/7ZTRLMnpjg8/lcpNct4mGr1fqSK7HT6UwhfleLuFwuH1EoFBWuxDqd7jPiDzSLe+Lx+AQJYl9MKBQKZ+pb7kaxKBKJXGUgPgqCgGrQOc3S6fQEfuNvFEtisdgUA3E/kcsadE6zhYUFG9lKG2LcvMxA3EKnKUBx+bm6uqptFvcCtUql+kECWcdoNH6BQw56fltcYNTtdr/nSuzxeJbhONkujw9Fo9EYV+JkMvkAjv3txEOVSuUSytk3tqWoz2to/xwYaCcWgtPI5+dsSrGo6mn0GG2PtG6ZDYbBRb/f/5EtcSgUeos2J8HgpmURHMaQz6JglP5U6vV6P6G962Sr5HcUE/rAKXB7bm5uhenwhsPheim8BUa6HwQaSMjSv5HNZl+gstDOb5fL9X1xcTGLZ6fAMSDe6ilTBA4CO7iXyWReB4PBMo5F1WYZymkVc1nK5XKvEHsHWMA+sJ3p8VYAhkjvJ4EPRMCzYrE4XyqV5nGdBA/BLLCC46Tu8tl4kxCAAdKLE0AGzhKkZB73kqIh4PI1lQf4BB6TNn4B8KR3FN9bp4MAAAAASUVORK5CYII=\" alt=\"Timeline\" /></span>
    <strong>Timeline</strong>
</span>
";
    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        // line 41
        echo "    <h2>Timeline</h2>
    ";
        // line 42
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"))) {
            // line 43
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 45
            echo "        <p>
            <em>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 51
    public function block_panelContent($context, array $blocks = array())
    {
        // line 52
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\" />
        <table>
            <tr>
                <th style=\"width: 20%\">Total time</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Initialization time</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inittime")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Threshold</th>
                <td><input type=\"number\" size=\"3\" name=\"threshold\" value=\"1\" min=\"0\" /> ms</td>
            </tr>
        </table>
    </form>

    <h3>
        ";
        // line 71
        echo (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent")) ? ("Request") : ("Main Request"));
        echo "
        <small>
            - ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "duration"), "html", null, true);
        echo " ms
            ";
        // line 74
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent")) {
            // line 75
            echo "                - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "token"), "panel" => "time")), "html", null, true);
            echo "\">parent</a>
            ";
        }
        // line 77
        echo "        </small>
    </h3>

    ";
        // line 80
        echo $context["__internal_a7c844759c49169c2fb00a21fa1fd1ce2d45f941"]->getdisplay_timeline(("timeline_" . (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo "

    ";
        // line 82
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"))) {
            // line 83
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 84
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "time"), "method"), "events");
                // line 85
                echo "            <h3>
                Sub-request \"<a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "request"), "method"), "requestattributes"), "get", array(0 => "_controller"), "method"), "html", null, true);
                echo "</a>\"
                <small> - ";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__"), "duration"), "html", null, true);
                echo " ms</small>
            </h3>

            ";
                // line 90
                echo $context["__internal_a7c844759c49169c2fb00a21fa1fd1ce2d45f941"]->getdisplay_timeline(("timeline_" . $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token")), (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 92
            echo "    ";
        }
        // line 93
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                }

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            }
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param  string selector a CSS-selector-compatible query string.
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors  = ";
        // line 136
        echo twig_jsonencode_filter((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo ",
                _storagePrefix  = 'timeline/',
                _threshold      = 1,
                _requests       = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is.
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is.
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds).
             * @param width     the width of the canvas.
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId    = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent  = 38,
                    colors = _drawingColors,
                    space  = 10.5,
                    ratio  = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx    = canvas.getContext(\"2d\");

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                canvas.width  = width;
                canvas.height = canvasHeight;

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#dfdfdf\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            ctx.fillStyle = colors.child_sections;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return ! isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle   = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle   = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle   = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if ( ! isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 6);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#dfdfdf\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \" ~ \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / ~ \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"12px sans-serif\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"10px sans-serif\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width     = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (threshold === null) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        };

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 389
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "endtime")), "html", null, true);
        echo ",
            \"requests\": [
";
        // line 391
        echo $context["__internal_a7c844759c49169c2fb00a21fa1fd1ce2d45f941"]->getdump_request_data((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), (isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "origin"));
        echo "

";
        // line 393
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"))) {
            // line 394
            echo "                ,
";
            // line 395
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 396
                echo $context["__internal_a7c844759c49169c2fb00a21fa1fd1ce2d45f941"]->getdump_request_data($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"), (isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "time"), "method"), "events"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "origin"));
                echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        // line 399
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl  = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize                 = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick  = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup  = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]></script>
";
    }

    // line 434
    public function getdump_request_data($_token = null, $_profile = null, $_events = null, $_origin = null)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $_token,
            "profile" => $_profile,
            "events" => $_events,
            "origin" => $_origin,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 435
            $context["__internal_40953968b550d21e69ae283ace089a4af03dbf5e"] = $this;
            // line 436
            echo "                {
                    \"id\": \"";
            // line 437
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\",
                    \"left\": ";
            // line 438
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__"), "origin") - (isset($context["origin"]) ? $context["origin"] : $this->getContext($context, "origin")))), "html", null, true);
            echo ",
                    \"events\": [
";
            // line 440
            echo $context["__internal_40953968b550d21e69ae283ace089a4af03dbf5e"]->getdump_events((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            echo "
                    ]
                }
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 445
    public function getdump_events($_events = null)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $_events,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 446
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 447
                if (("__section__" != (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) {
                    // line 448
                    echo "                        {
                            \"name\": \"";
                    // line 449
                    echo twig_escape_filter($this->env, strtr((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array("\\" => "\\\\")), "html", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 450
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category"), "html", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 451
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "origin")), "html", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 452
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "starttime")), "html", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 453
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endtime")), "html", null, true);
                    echo ",
                            \"duration\": ";
                    // line 454
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "duration")), "html", null, true);
                    echo ",
                            \"memory\": ";
                    // line 455
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "memory") / 1024) / 1024)), "html", null, true);
                    echo ",
                            \"periods\": [";
                    // line 457
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "periods"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 458
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")), "starttime")), "html", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")), "endtime")), "html", null, true);
                        echo "}";
                        echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 460
                    echo "]
                        }";
                    // line 461
                    echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 466
    public function getdisplay_timeline($_id = null, $_events = null, $_colors = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "events" => $_events,
            "colors" => $_colors,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 467
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 469
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 470
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 472
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 473
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  615 => 440,  606 => 437,  603 => 436,  601 => 435,  532 => 396,  515 => 395,  510 => 393,  344 => 119,  300 => 105,  148 => 63,  291 => 102,  256 => 122,  251 => 120,  227 => 105,  210 => 97,  194 => 89,  188 => 90,  388 => 154,  346 => 136,  323 => 124,  319 => 123,  315 => 110,  221 => 102,  215 => 99,  212 => 78,  202 => 77,  161 => 63,  153 => 77,  643 => 389,  634 => 383,  630 => 445,  628 => 377,  618 => 374,  597 => 361,  593 => 360,  587 => 434,  567 => 346,  559 => 341,  535 => 326,  504 => 306,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  428 => 265,  420 => 260,  390 => 155,  354 => 219,  297 => 104,  281 => 167,  222 => 138,  217 => 136,  207 => 96,  686 => 206,  680 => 203,  677 => 202,  675 => 452,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  562 => 169,  517 => 163,  509 => 161,  506 => 160,  503 => 159,  500 => 389,  498 => 157,  495 => 156,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 131,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 148,  371 => 145,  366 => 107,  359 => 106,  356 => 139,  340 => 97,  318 => 111,  274 => 97,  272 => 76,  269 => 75,  263 => 95,  254 => 121,  238 => 64,  233 => 109,  228 => 82,  335 => 94,  331 => 94,  326 => 90,  303 => 106,  286 => 80,  271 => 127,  245 => 66,  243 => 92,  240 => 64,  218 => 57,  211 => 53,  190 => 76,  181 => 115,  172 => 64,  167 => 78,  152 => 64,  613 => 372,  610 => 438,  605 => 199,  592 => 192,  588 => 190,  583 => 356,  577 => 353,  575 => 176,  572 => 175,  566 => 171,  564 => 181,  561 => 180,  555 => 167,  553 => 177,  550 => 399,  544 => 174,  542 => 330,  539 => 172,  536 => 171,  531 => 324,  527 => 320,  521 => 317,  512 => 394,  502 => 122,  494 => 120,  491 => 119,  485 => 292,  481 => 109,  478 => 108,  470 => 105,  464 => 104,  449 => 100,  441 => 97,  436 => 96,  433 => 95,  424 => 93,  417 => 87,  411 => 86,  406 => 252,  403 => 84,  397 => 48,  375 => 231,  367 => 39,  351 => 137,  342 => 134,  339 => 133,  336 => 131,  327 => 114,  320 => 171,  307 => 166,  304 => 165,  302 => 116,  289 => 81,  276 => 165,  253 => 147,  248 => 89,  242 => 142,  234 => 140,  232 => 139,  205 => 95,  198 => 132,  184 => 64,  179 => 63,  155 => 68,  124 => 40,  113 => 48,  12 => 45,  333 => 85,  330 => 84,  325 => 82,  321 => 112,  316 => 170,  313 => 169,  306 => 107,  299 => 75,  296 => 160,  290 => 72,  288 => 101,  282 => 79,  270 => 100,  267 => 99,  261 => 96,  255 => 93,  250 => 67,  244 => 136,  239 => 112,  236 => 63,  231 => 83,  213 => 23,  206 => 51,  175 => 65,  170 => 84,  159 => 54,  118 => 49,  127 => 28,  90 => 42,  34 => 5,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 370,  604 => 368,  598 => 195,  595 => 190,  591 => 189,  586 => 189,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 334,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 123,  505 => 391,  501 => 88,  499 => 121,  496 => 301,  493 => 76,  489 => 171,  482 => 149,  472 => 287,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 153,  431 => 152,  426 => 133,  415 => 147,  410 => 253,  400 => 248,  394 => 242,  391 => 118,  389 => 46,  370 => 229,  361 => 36,  357 => 35,  353 => 138,  347 => 31,  343 => 98,  332 => 116,  329 => 127,  324 => 113,  310 => 184,  301 => 76,  284 => 110,  279 => 82,  277 => 129,  273 => 80,  265 => 96,  262 => 157,  259 => 123,  257 => 74,  249 => 71,  226 => 81,  223 => 58,  200 => 92,  197 => 54,  191 => 67,  185 => 74,  178 => 66,  174 => 65,  146 => 34,  134 => 54,  100 => 39,  97 => 41,  81 => 20,  65 => 22,  23 => 18,  20 => 1,  58 => 25,  110 => 22,  76 => 34,  59 => 13,  192 => 82,  150 => 93,  53 => 17,  137 => 60,  104 => 32,  77 => 25,  63 => 18,  129 => 55,  102 => 40,  480 => 290,  474 => 164,  469 => 162,  461 => 160,  457 => 153,  453 => 120,  444 => 98,  440 => 272,  437 => 138,  435 => 270,  430 => 94,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 131,  402 => 126,  398 => 243,  393 => 156,  387 => 122,  384 => 237,  381 => 150,  379 => 236,  374 => 116,  368 => 112,  365 => 142,  362 => 110,  360 => 140,  355 => 106,  341 => 118,  337 => 96,  322 => 201,  314 => 99,  312 => 109,  309 => 108,  305 => 182,  298 => 84,  294 => 136,  285 => 168,  283 => 100,  278 => 98,  268 => 78,  264 => 98,  258 => 94,  252 => 59,  247 => 117,  241 => 149,  235 => 85,  229 => 138,  224 => 81,  220 => 63,  214 => 69,  208 => 73,  169 => 43,  143 => 51,  140 => 58,  132 => 59,  128 => 41,  119 => 40,  107 => 24,  38 => 18,  71 => 30,  177 => 78,  165 => 83,  160 => 66,  135 => 62,  126 => 51,  114 => 36,  84 => 40,  70 => 33,  67 => 24,  61 => 15,  28 => 3,  87 => 41,  25 => 35,  21 => 12,  94 => 34,  89 => 26,  85 => 24,  75 => 19,  68 => 30,  56 => 11,  196 => 92,  183 => 84,  171 => 61,  166 => 73,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 51,  138 => 45,  136 => 71,  121 => 50,  117 => 39,  105 => 18,  91 => 33,  62 => 27,  49 => 14,  31 => 4,  26 => 9,  24 => 14,  19 => 1,  93 => 14,  88 => 25,  78 => 26,  46 => 13,  44 => 20,  27 => 3,  79 => 21,  72 => 18,  69 => 17,  47 => 21,  40 => 11,  37 => 5,  22 => 12,  246 => 70,  157 => 41,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 20,  115 => 75,  111 => 47,  108 => 19,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 14,  55 => 24,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 82,  203 => 128,  199 => 93,  193 => 129,  189 => 71,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 57,  164 => 67,  162 => 62,  154 => 60,  149 => 71,  147 => 75,  144 => 62,  141 => 73,  133 => 47,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 45,  99 => 44,  95 => 64,  92 => 43,  86 => 33,  82 => 28,  80 => 32,  73 => 33,  64 => 23,  60 => 20,  57 => 16,  54 => 14,  51 => 13,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
