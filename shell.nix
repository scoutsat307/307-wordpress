{ pkgs ? import <nixpkgs> {} }:
  pkgs.mkShell {
    # nativeBuildInputs is usually what you want -- tools you need to run
    nativeBuildInputs = with pkgs; [ 
      # Node Deps
      nodejs
      nodePackages.npm
      nodePackages.yarn

      # Php Deps
      php74
      php74Packages.composer2
    ];
}