<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rakha Map Design') | Jasa Desain Map Game 2D</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --bg: #16162C;
            --panel: #1F1F3D;
            --border: #4A4A7A;
            --ink: #E9E9F7;
            --ink-soft: #A5A5CC;
            --mint: #5EEAD4;
            --coral: #FF6B81;
            --gold: #FFD166;
        }

        body {
            background-color: var(--bg);
            color: var(--ink);
            font-family: 'VT323', monospace;
            font-size: 20px;
            background-image:
                repeating-linear-gradient(0deg, rgba(255,255,255,0.025) 0px, rgba(255,255,255,0.025) 1px, transparent 1px, transparent 4px);
        }

        .font-pixel {
            font-family: 'Press Start 2P', monospace;
            line-height: 1.7;
        }

        .pixel-frame {
            --p: 8px;
            clip-path: polygon(
                0 var(--p), var(--p) var(--p), var(--p) 0,
                calc(100% - var(--p)) 0, calc(100% - var(--p)) var(--p), 100% var(--p),
                100% calc(100% - var(--p)), calc(100% - var(--p)) calc(100% - var(--p)), calc(100% - var(--p)) 100%,
                var(--p) 100%, var(--p) calc(100% - var(--p)), 0 calc(100% - var(--p))
            );
            box-shadow: inset 0 0 0 3px var(--border);
            background: var(--panel);
        }

        .pixel-btn {
            font-family: 'Press Start 2P', monospace;
            font-size: 13px;
            color: var(--bg);
            background: var(--mint);
            box-shadow: inset 0 0 0 3px #0f766e, 0 5px 0 0 #0f766e;
            transition: transform 0.08s ease, box-shadow 0.08s ease;
        }
        .pixel-btn:active {
            transform: translateY(5px);
            box-shadow: inset 0 0 0 3px #0f766e, 0 0 0 0 #0f766e;
        }

        .pixel-tag {
            font-family: 'Press Start 2P', monospace;
            font-size: 10px;
        }
    </style>
</head>
<body>

    {{-- NAVBAR --}}
    <nav class="border-b-4" style="border-color: var(--border); background: var(--panel);">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <svg width="30" height="30" viewBox="0 0 10 10" shape-rendering="crispEdges">
                    <rect x="4" y="0" width="2" height="2" fill="#FFD166"/>
                    <rect x="2" y="2" width="2" height="2" fill="#FFD166"/>
                    <rect x="6" y="2" width="2" height="2" fill="#FFD166"/>
                    <rect x="0" y="4" width="2" height="2" fill="#5EEAD4"/>
                    <rect x="4" y="4" width="2" height="2" fill="#5EEAD4"/>
                    <rect x="8" y="4" width="2" height="2" fill="#5EEAD4"/>
                    <rect x="2" y="6" width="2" height="2" fill="#FF6B81"/>
                    <rect x="6" y="6" width="2" height="2" fill="#FF6B81"/>
                    <rect x="4" y="8" width="2" height="2" fill="#E9E9F7"/>
                </svg>
                <span class="font-pixel text-xs" style="color: var(--gold);">RAKHA MAP DESIGN</span>
            </a>
            <div class="hidden sm:flex gap-6 font-pixel text-[10px]" style="color: var(--ink-soft);">
                <a href="{{ url('/') }}" class="hover:text-[var(--mint)]">HOME</a>
                <a href="{{ url('/portfolio') }}" class="hover:text-[var(--mint)]">PORTFOLIO</a>
                <a href="{{ url('/about') }}" class="hover:text-[var(--mint)]">ABOUT</a>
                <a href="{{ url('/contact') }}" class="hover:text-[var(--mint)]">CONTACT</a>
            </div>
        </div>
    </nav>

    {{-- ISI HALAMAN --}}
    <main class="max-w-6xl mx-auto px-6 py-16">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="mt-20 py-8 border-t-4" style="border-color: var(--border); background: var(--panel);">
        <p class="text-center font-pixel text-[10px]" style="color: var(--ink-soft);">
            © {{ date('Y') }} RAKHA MAP DESIGN
        </p>
    </footer>

</body>
</html>
