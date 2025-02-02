class Quest < ApplicationRecord
    has_many :etape
    has_many :progress
end