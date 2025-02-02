class Joueur < ApplicationRecord
    has_many :inventaire
    has_many :progress
end