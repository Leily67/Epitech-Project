class Inventaire < ApplicationRecord
    belongs_to :joueur
    belongs_to :objet
end