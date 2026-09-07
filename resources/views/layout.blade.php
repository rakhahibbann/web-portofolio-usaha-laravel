<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rakha Map Design') | Jasa Desain Map Game 2D</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --bg: #0E1015;
            --panel: #15171F;
            --panel-soft: #1B1E28;
            --border: #262A36;
            --ink: #F2F3F6;
            --ink-soft: #9BA1AF;
            --accent: #6C63F2;
            --accent-soft: #C9C5FB;
            --accent-2: #34C29B;
            --accent-3: #E8A23D;
        }

        body {
            background-color: var(--bg);
            color: var(--ink);
            font-family: 'Inter', sans-serif;
        }

        .font-display {
            font-family: 'Space Grotesk', sans-serif;
        }

        .card {
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: 1rem;
            transition: border-color 0.15s ease, transform 0.15s ease;
        }
        .card-hover:hover {
            border-color: var(--accent);
            transform: translateY(-3px);
        }

        .btn-primary {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 600;
            background: var(--accent);
            color: #ffffff;
            border-radius: 0.75rem;
            transition: transform 0.15s ease, background 0.15s ease;
        }
        .btn-primary:hover {
            background: #7d75f5;
            transform: translateY(-2px);
        }

        .tag {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.03em;
        }
    </style>
</head>
<body>

    {{-- NAVBAR --}}
    <nav class="border-b" style="border-color: var(--border); background: var(--panel);">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <svg width="28" height="28" viewBox="0 0 10 10" shape-rendering="crispEdges">
                    <rect x="4" y="0" width="2" height="2" fill="#E8A23D"/>
                    <rect x="2" y="2" width="2" height="2" fill="#E8A23D"/>
                    <rect x="6" y="2" width="2" height="2" fill="#E8A23D"/>
                    <rect x="0" y="4" width="2" height="2" fill="#34C29B"/>
                    <rect x="4" y="4" width="2" height="2" fill="#34C29B"/>
                    <rect x="8" y="4" width="2" height="2" fill="#34C29B"/>
                    <rect x="2" y="6" width="2" height="2" fill="#6C63F2"/>
                    <rect x="6" y="6" width="2" height="2" fill="#6C63F2"/>
                    <rect x="4" y="8" width="2" height="2" fill="#F2F3F6"/>
                </svg>
                <span class="font-display font-semibold text-sm tracking-tight" style="color: var(--ink);">Rakha Map Design</span>
            </a>
            <div class="hidden sm:flex gap-8 text-sm font-medium" style="color: var(--ink-soft);">
                <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
                <a href="{{ url('/portfolio') }}" class="hover:text-white transition-colors">Portfolio</a>
                <a href="{{ url('/about') }}" class="hover:text-white transition-colors">About</a>
                <a href="{{ url('/contact') }}" class="hover:text-white transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    {{-- ISI HALAMAN --}}
    <main class="max-w-6xl mx-auto px-6 py-16">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="mt-20 py-8 border-t" style="border-color: var(--border); background: var(--panel);">
        <p class="text-center text-sm" style="color: var(--ink-soft);">
            © {{ date('Y') }} Rakha Map Design
        </p>
    </footer>


</body>
</html>
