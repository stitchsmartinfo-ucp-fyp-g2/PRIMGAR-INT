import os

directory = '/Applications/xampp/xamppfiles/htdocs/Hassh Wears'

replacements = {
    'primgarinternational': 'primgarinternational',
    'PRIMGARINTERNATIONAL': 'PRIMGARINTERNATIONAL',
    'primgar_intl': 'primgar_intl',
    'PRIMGAR · INTERNATIONAL': 'PRIMGAR · INTERNATIONAL',
    'PRIMGAR<span>INTERNATIONAL': 'PRIMGAR<span>INTERNATIONAL',
    'PRIMGAR<span': 'PRIMGAR<span',
    'primgar': 'primgar',
    'PRIMGAR': 'PRIMGAR',
    'Primgar International': 'Primgar International',
    'PrimgarInternational': 'PrimgarInternational',
    '>INTERNATIONAL<': '>INTERNATIONAL<'
}

for root, dirs, files in os.walk(directory):
    if '.git' in root or 'node_modules' in root or 'vendor' in root:
        continue
    for file in files:
        if file.endswith(('.php', '.html', '.css', '.js', '.ts', '.tsx', '.json', '.md', '.py', '.xml', '.txt')):
            filepath = os.path.join(root, file)
            try:
                with open(filepath, 'r', encoding='utf-8') as f:
                    content = f.read()
                
                new_content = content
                for old, new in replacements.items():
                    new_content = new_content.replace(old, new)
                
                if new_content != content:
                    with open(filepath, 'w', encoding='utf-8') as f:
                        f.write(new_content)
                    print(f"Updated {filepath}")
            except Exception as e:
                pass
